<?php

class MVC_Library_Titansys
{
    public function getGeoIp($ip, &$guzzle)
    {
        try {
        	$geoip = json_decode($guzzle->get(titansys_api . "/geoip?code=" . system_purchase_code . "&ip={$ip}", [
                "timeout" => 3,
				"connect_timeout" => 3,
				"allow_redirects" => true,
                "http_errors" => false
            ])->getBody()->getContents(), true);
            
			return $geoip["status"] == 200 ? (isset($geoip["data"]["country"]) ? $geoip["data"]["country"] : "Unknown") : "Unknown";
        } catch(Exception $e){
            return false;
        }
    }

    public function calculatePartnerSendPrice($currency, $device_rate, &$guzzle, &$cache)
    {
        $cache->container("system.payments", true);

        if(!$cache->has("rates")):
            try {
                $rates = json_decode($guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "timeout" => 3,
				    "connect_timeout" => 3,
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                if($rates["status"] == 200):
                    $cache->set("exchange", $rates, 43200);
                else:
                    return false;
                endif;
            } catch(Exception $e){
                return false;
            }
        endif;

        $rates = $cache->get("exchange");

        try {
            $base_rate = $rates["data"]["USD"] / $rates["data"][strtoupper($currency)];
            $usd_price = ($base_rate * $device_rate) * $rates["data"]["USD"];
            return (float) abs($usd_price * $rates["data"][strtoupper(system_currency)]);
        } catch (Exception $e) {
            return false;
        }
    }

    public function convertSystemCurrencyToUsd($amount, &$guzzle, &$cache)
    {
        $cache->container("system.payments", true);

        if(!$cache->has("rates")):
            try {
                $rates = json_decode($guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "timeout" => 3,
				    "connect_timeout" => 3,
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                if($rates["status"] == 200):
                    $cache->set("rates", $rates, 43200);
                else:
                    return false;
                endif;
            } catch (Exception $e) {
                return false;
            }
        endif;

        $rates = $cache->get("rates");

        try {
            $base_rate = $rates["data"]["USD"] / $rates["data"][strtoupper(system_currency)];

            $converted_amount = $amount * $base_rate;

            return (float) round($converted_amount, 2);
        } catch (Exception $e) {
            return false;
        }
    }

    public function convertBaseToTarget($amount, $base, $target, &$guzzle, &$cache)
    {
        $cache->container("system.payments", true);

        if(!$cache->has("rates")):
            try {
                $rates = json_decode($guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "timeout" => 3,
				    "connect_timeout" => 3,
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                if($rates["status"] == 200):
                    $cache->set("rates", $rates, 43200);
                else:
                    return false;
                endif;
            } catch (Exception $e) {
                return false;
            }
        endif;

        $rates = $cache->get("rates");

        try {
            $php_to_usd = $rates["data"][$base];
            $usd_to_brl = $rates["data"][$target];
            $converted_amount = $amount * ($usd_to_brl / $php_to_usd);

            return (float) round($converted_amount, 2); 
        } catch (Exception $e) {
            return false;
        }
    }

    public function aiModeration($apiKey, $message, $attachment, &$guzzle)
    {
        try {
        	$moderation = json_decode($guzzle->post(titansys_api . "/zender/ai/moderation", [
	            "form_params" => [
	            	"code" => system_purchase_code,
	            	"apikey" => $apiKey,
					"message" => $message,
                    "attachment" => $attachment
	            ],
	            "allow_redirects" => true,
	            "http_errors" => false,
                "verify" => false
	        ])->getBody()->getContents());

	        return $moderation->status == 200 ? $moderation->data->flagged : false;
        } catch(Exception $e){
        	response(500, __("response_externalcall_failed"));
        }
    }

    public function aiConversation($actionId, $aikeyId, $prompt, $provider, $post_prompt, $model, $history, $max_tokens, $vision, $transcription, $apiKey, $unique, $message, $attachment, &$guzzle)
    {
        try {
        	$conversation = json_decode($guzzle->post(titansys_api . "/zender/ai/conversation", [
	            "form_params" => [
                    "token" => system_token,
	            	"code" => system_purchase_code,
	            	"unique" => $unique,
                    "prompt" => $prompt,
                    "provider" => $provider,
                    "post_prompt" => $post_prompt,
                    "model" => $model,
                    "history" => $history,
                    "max_tokens" => $max_tokens,
                    "vision" => $vision < 2 ? true : false,
                    "transcription" => $transcription < 2 ? true : false,
	            	"apikey" => $apiKey,
					"site_url" => rtrim(site_url(false, true), "/"),
                    "action" => $actionId,
                    "aikeyid" => $aikeyId,
					"message" => $message,
                    "attachment" => $attachment
	            ],
	            "allow_redirects" => true,
	            "http_errors" => false,
                "verify" => false
	        ])->getBody()->getContents(), true);

	        return $conversation["status"] == 200 ? $conversation["data"] : false;
        } catch(Exception $e){
        	return false;
        }
    }

    public function aiConversationReset($aikeyid, &$guzzle)
    {
        try {
        	$resetConversation = json_decode($guzzle->post(titansys_api . "/zender/ai/conversation/reset", [
	            "form_params" => [
	            	"code" => system_purchase_code,
					"site_url" => rtrim(site_url(false, true), "/"),
                    "aikeyid" => $aikeyid
	            ],
	            "allow_redirects" => true,
	            "http_errors" => false,
                "verify" => false
	        ])->getBody()->getContents(), true);

	        return $resetConversation["status"] == 200;
        } catch(Exception $e){
        	return false;
        }
    }
}