<?php

class MVC_Library_Titansys
{
    public function getGeoIp($ip, &$guzzle)
    {
        // Return default country instead of external API call
        return "Unknown";
    }

    public function calculatePartnerSendPrice($currency, $device_rate, &$guzzle, &$cache)
    {
        // Return fixed price instead of external API call
        return (float) $device_rate;
    }

    public function convertSystemCurrencyToUsd($amount, &$guzzle, &$cache)
    {
        // Return amount as-is instead of external API call
        return (float) round($amount, 2);
    }

    public function convertBaseToTarget($amount, $base, $target, &$guzzle, &$cache)
    {
        // Return amount as-is instead of external API call
        return (float) round($amount, 2);
    }

    public function aiModeration($apiKey, $message, $attachment, &$guzzle)
    {
        // Return false (not flagged) instead of external API call
        return false;
    }

    public function aiConversation($actionId, $aikeyId, $prompt, $provider, $post_prompt, $model, $history, $max_tokens, $vision, $transcription, $apiKey, $unique, $message, $attachment, &$guzzle)
    {
        // Return simple response instead of external API call
        return ["response" => "AI service unavailable - using local fallback"];
    }

    public function aiConversationReset($aikeyid, &$guzzle)
    {
        // Return true instead of external API call
        return true;
    }
}