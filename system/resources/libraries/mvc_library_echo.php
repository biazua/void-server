<?php
/**
 * TitanEcho
 * @author Titan Systems <mail@titansystems.ph>
 * @description Library for communicating with TitanEcho
 */

class MVC_Library_Echo
{
	public function token(&$guzzle, &$cache, $refreshOldToken = false, $check = false)
	{
		$cache->container("system.echo", true);

		if($refreshOldToken):
			try {
				json_decode($guzzle->post(titansys_echo . "/delete", [
					"form_params" => [
		            	"purchase_code" => bypass,
		            	"token" => $refreshOldToken
		            ],
					"timeout" => 3,
					"connect_timeout" => 3,
	                "allow_redirects" => true,
	                "http_errors" => false
	            ])->getBody()->getContents());

	            $cache->delete("token");
			} catch(Exception $e){
				return false;
			}
		else:
			if($check):
				if($cache->has("token")):
					try {
						$check = json_decode($guzzle->post(titansys_echo . "/check", [
							"form_params" => [
				            	"purchase_code" => bypass,
				            	"token" => $cache->get("token")
				            ],
							"timeout" => 3,
							"connect_timeout" => 3,
			                "allow_redirects" => true,
			                "http_errors" => false
			            ])->getBody()->getContents());

			            if($check->status == 500):
			            	$cache->delete("token");
			            endif;
					} catch(Exception $e){
						return false;
					}
				endif;
			endif;
		endif;

		if(!$cache->has("token")):
			try {
				$token = json_decode($guzzle->post(titansys_echo . "/token", [
					"form_params" => [
		            	"purchase_code" => bypass,
		            	"site_url" => site_url
		            ],
					"timeout" => 3,
					"connect_timeout" => 3,
	                "allow_redirects" => true,
	                "http_errors" => false
	            ])->getBody()->getContents());

	            if($token->status == 200):
	            	$cache->set("token", $token->data->token);
	            else:
	            	return false;
	            endif;
			} catch(Exception $e){
				return false;
			}
		endif;

		return $cache->get("token");
	}

	public function notify($name, $content, &$guzzle, &$cache, $volatile = false)
	{
		$token = $this->token($guzzle, $cache);

		try {
			$notify = json_decode($guzzle->post(titansys_echo . "/notify", [
				"form_params" => [
					"token" => $token,
					"event_name" => $name,
					"event_content" => $content,
					"event_volatile" => $volatile
				],
				"timeout" => 3,
				"connect_timeout" => 3,
                "allow_redirects" => true,
                "http_errors" => false
            ])->getBody()->getContents());

            if($notify->status == 200):
            	return true;
            else:
            	return false;
            endif;
		} catch(Exception $e){
			return false;
		}
	}

	public function status($socket_id, &$guzzle, &$cache)
	{
		$token = $this->token($guzzle, $cache);

		try {
			$status = json_decode($guzzle->post(titansys_echo . "/status", [
				"form_params" => [
					"token" => $token,
					"socket_id" => $socket_id,
				],
				"timeout" => 3,
				"connect_timeout" => 3,
                "allow_redirects" => true,
                "http_errors" => false
            ])->getBody()->getContents());

            if($status->status == 200):
	            return $status->data->connected;
            else:
            	return false;
            endif;
		} catch(Exception $e){
			return false;
		}
	}
}