<?php

// Log file path and name
$logFilePath = __DIR__ . "/file.log";

// Your webhook secret
$secret = "77dd7bc0ce052011dd6e7f3e256a682d29338025";
$API_secret = "037a6284cac17371dc8d46dcfa23c5bc7eec8176";
$account = "1715610928c4ca4238a0b923820dcc509a6f75849b664225302afa7";
$googleCloudVisionApi = "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyCejUYf1ZwvfjpB-61CoQZ_uuX78428PIw";

// Function to append log messages to a file
function appendToLog($message, $logFilePath) {
    $logFile = fopen($logFilePath, "a");
    fwrite($logFile, $message . PHP_EOL);
    fclose($logFile);
}

// Function to send WhatsApp messages
function sendWhatsAppMessage($recipient, $message, $API_secret, $account, $media_message) {


    if (!empty($media_message)) {
        $chat = array(
            "secret" => $API_secret,
            "account" => $account,
            "recipient" => $recipient,
            "type" => "media",
            "priority" => 1,
            "media_url" => $media_message,
            "media_type" => "image",
            "message" => $message
        );

        $urlParams = http_build_query($chat);
        $url = "https://ignite.rocketsuite.cloud/api/send/whatsapp?" . $urlParams;

        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($cURL);
        curl_close($cURL);

        return json_decode($response, true);
    }

    $chat = array(
        "secret" => $API_secret,
        "account" => $account,
        "recipient" => $recipient,
        "type" => "text",
        "priority" => 1,
        "message" => $message
    );
    $cURL = curl_init("https://ignite.rocketsuite.cloud/api/send/whatsapp");
    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cURL, CURLOPT_POSTFIELDS, $chat);
    $response = curl_exec($cURL);
    curl_close($cURL);


    return json_decode($response, true, 512, JSON_THROW_ON_ERROR);

}

// Function to extract text from image using Google Cloud Vision
use Google\Cloud\Vision\V1\Image;
function extractTextFromImage($imageUrl, $googleCloudVisionApi) {
    global $logFilePath;

    try {
        $imageData = file_get_contents($imageUrl);
        $imageBase64 = base64_encode($imageData);
        $postData = [
            'requests' => [
                [
                    'image' => [
                        'content' => $imageBase64
                    ],
                    'features' => [
                        [
                            'type' => 'TEXT_DETECTION'
                        ]
                    ]
                ]
            ]
        ];
        $postDataJson = json_encode($postData, JSON_THROW_ON_ERROR);
        appendToLog("Google Cloud Vision for OCR PAYLOAD: " . $postDataJson, $logFilePath);

        $cURL = curl_init($googleCloudVisionApi);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_POST, true);
        curl_setopt($cURL, CURLOPT_POSTFIELDS, $postDataJson);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $response = curl_exec($cURL);
        curl_close($cURL);

        $response = json_decode($response, true, 512, JSON_THROW_ON_ERROR);
        appendToLog("Sending attachment to Google Cloud Vision for OCR: " . json_encode($response), $logFilePath);

        if (isset($response['responses'][0]['textAnnotations'])) {
            $text = "";
            foreach ($response['responses'][0]['textAnnotations'] as $annotation) {
                $text .= $annotation['description'] . " ";
            }
            return $text;
        } else {
            return null;
        }
    } catch (Exception $e) {
        appendToLog("Error extracting text from image: " . $e->getMessage(), $logFilePath);
        return null;
    }
}

// Function to handle webhook request
function handleWebhookRequest($secret, $API_secret, $account, $googleCloudVisionApi, $logFilePath) {
    if (isset($_REQUEST["secret"]) && $_REQUEST["secret"] === $secret) {
        $payloadType = $_REQUEST["type"];
        $payloadData = $_REQUEST["data"];

        if ($payloadType === "whatsapp" && !empty($payloadData["attachment"])) {
            $attachmentUrl = $payloadData["attachment"];

            // Send initial message
            sendWhatsAppMessage($payloadData["phone"], "Thanks for the image. \nLet me take a quick look!", $API_secret, $account,0);
            appendToLog("Sending initial message: Attachment received!", $logFilePath);
            sleep(5);
            // Extract text from image
            //$extractedText = extractTextFromImage($attachmentUrl, $googleCloudVisionApi);

            // Find the total amount in the extracted text
            $totalAmount = 300;

            if ($totalAmount > 200) {
                // Send extracted text
                $media_url = "https://t3.ftcdn.net/jpg/02/80/01/64/360_F_280016442_I5DcWCRT7JTr5Ut86a9VvqNoOfDt854G.jpg";
                sendWhatsAppMessage($payloadData["phone"], "Congratulations! You have won a free ticket to Game Zone worth K{$totalAmount}. \n Terms and Conditions Apply" , $API_secret, $account,$media_url);
                appendToLog("Sending winning text: ", $logFilePath);
            } else {
                // Handle error
                sendWhatsAppMessage($payloadData["phone"], "Thank you for participating", $API_secret, $account,0);
                appendToLog("Send loss text.", $logFilePath);
            }
        } else {
            $media_url = "https://previews.123rf.com/images/maxborovkov/maxborovkov1809/maxborovkov180900067/110330061-autumn-welcome-sign-with-colorful-maple-leaves-vector-background.jpg";

            $result = sendWhatsAppMessage($payloadData["phone"], "Hello,\nWelcome to our exciting campaign where you stand a chance to win amazing prizes. \n\nPlease upload a photo of your receipt from Shoprite.", $API_secret, $account, $media_url);
            appendToLog("No image attachment found.", $logFilePath);
            appendToLog(json_encode($result), $logFilePath);
        }
    }
}

// Handle the webhook request
handleWebhookRequest($secret, $API_secret, $account, $googleCloudVisionApi, $logFilePath);