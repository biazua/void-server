<?php
/**
 * @controller Device
 */

class Device_Controller extends MVC_Controller
{
	public function index()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset($request["hash"], $request["did"]))
			response(400, false, []);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403, false, []);

		$uid = $decode;
		$hash = md5($uid);
	
		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

		if($this->device->checkDevice($request["did"]) < 1)
			response(403, false, []);

		$device = $this->device->getDevice($request["did"]);

		response(200, false, [
			"name" => $device["name"],
			"receive_sms" => $device["receive_sms"],
			"random_send" => $device["random_send"],
			"random_min" => $device["random_min"],
			"random_max" => $device["random_max"],
			"packages" => $device["packages"]
		]);
	}

	public function update()
	{
		$this->header->allow();

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

		set_system($this->cache->getAll());

		response(200, false, [
			"latest_version" => system_apk_version,
			"apk_url" => site_url("uploads/builder/gateway.apk", true)
		]);
	}

	public function token()
	{
		$this->header->allow();

		$request = $this->sanitize->json();
		
		if(!isset($request["hash"], $request["did"], $request["token"]))
			response(400);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        if($this->device->checkDevice($request["did"]) < 1)
        	response(403);

		$device = $this->device->getDevice($request["did"]);

		$this->system->update($device["id"], false, "devices", [
			"fcm_token" => $request["token"]
		]);

		response(200);
	}

	public function messages()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset($request["hash"], $request["did"], $request["diff"]))
			response(400);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        if($this->device->checkDevice($request["did"]) < 1)
        	response(403);

        $device = $this->device->getDevice($request["did"]);

        if($device["uid"] != $uid):
			$userEmail = $this->device->getUserEmail($device["uid"]);
			response(403, ___(__("app_response_devicealreadylinkedunablenew"), [maskEmail($userEmail)]));
		endif;

        $messages = $this->device->getPendingMessages($request["did"], $request["diff"]);

        $messageContainer = [];
        $hashContainer = [];

        if(!empty($messages)):
	        foreach($messages as $row):
				$row["message"] = htmlspecialchars_decode($row["message"]);
				
	        	if($uid == $row["uid"]):
	        		$subscription = set_subscription(
			            $this->system->checkSubscription($uid), 
			            $this->system->getSubscription(false, $uid), 
			            $this->system->getSubscription(false, false, true)
			        );

					if(empty($subscription))
						response(400);

		        	if(!limitation($subscription["send_limit"], $this->system->countQuota($uid, "sent"))):
		        		$messageContainer[] = $row;

			        	$this->system->update($row["id"], false, "sent", [
		        			"status" => 2
		        		]);

		        		$this->system->increment($uid, "sent");
		        	else:
		        		$this->system->update($row["id"], false, "sent", [
		        			"status" => 4
		        		]);
		        	endif;

		        	$hashContainer[$uid] = $hash;
		        else:
		        	$messageContainer[] = $row;

		        	$this->system->update($row["id"], false, "sent", [
	        			"status" => 2
	        		]);

	        		$hashContainer[$row["uid"]] = md5($row["uid"]);
		        endif;
			endforeach;
        endif;

        response(200, false, $messageContainer);
	}

	public function ussd()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset($request["hash"], $request["did"]))
			response(400);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        if($this->device->checkDevice($request["did"]) < 1)
        	response(403);

        $ussd = $this->device->getPendingUssd($request["did"]);

        if(!empty($ussd)):
	        foreach($ussd as $row):
	        	$this->system->update($row["id"], false, "ussd", [
        			"status" => 2
        		]);
			endforeach;
        endif;

        response(200, false, $ussd);
	}

	public function login()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset(
			$request["email"], 
			$request["password"], 
			$request["device_unique"], 
			$request["device_model"], 
			$request["device_version"], 
			$request["device_manufacturer"]
		))
			response(400, "Invalid Request!", null);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        set_language(system_default_lang);

		if(!$this->sanitize->isEmail($request["email"]))
			response(400, __("device_login_usevalidemail"), null);

		if($this->device->checkUserEmail($request["email"]) > 0):
			$access = $this->device->getUserAccess($request["email"]);

			if($access["suspended"] > 0):
				response(403, __("device_login_accountsuspended"), null);
			endif;

			if(!password_verify($request["password"], $access["password"])):
				response(401, __("device_login_incorrectmailorpass"), null);
			endif;
		else:
			response(401, __("device_login_incorrectmailorpass"), null);
		endif;

        $subscription = set_subscription(
            $this->system->checkSubscription($access["id"]), 
            $this->system->getSubscription(false, $access["id"]), 
            $this->system->getSubscription(false, false, true)
        );

		if(empty($subscription))
			response(403, __("device_login_nosubscription"), null);

		if($this->device->checkDevice($request["device_unique"]) > 0):
			$device = $this->device->getDevice($request["device_unique"]);

			if($device["uid"] != $access["id"]):
				$userEmail = $this->device->getUserEmail($device["uid"]);
				response(403, ___(__("app_response_devicealreadylinkednew"), [maskEmail($userEmail)]), null);
			endif;
			
			response(200, false, [
				"hash" => $this->hash->encode($access["id"], system_token),
				"name" => $device["name"],
				"receive_sms" => $device["global_device"] < 2 ? 2 : $device["receive_sms"],
				"random_send" => $device["random_send"],
				"random_min" => $device["random_min"],
				"random_max" => $device["random_max"]
			]);
		endif;

		if(limitation($subscription["device_limit"], $this->system->countDevices($access["id"])))
			response(403, __("device_login_nomoredevice"), null);

    	date_default_timezone_set($this->device->getUserTimezone($access["id"]));

		$filtered = [
			"uid" => $access["id"],
			"did" => $request["device_unique"],
			"name" => $request["device_model"],
			"version" => $request["device_version"],
			"manufacturer" => ucfirst($request["device_manufacturer"]),
			"random_send" => 1,
			"random_min" => 5,
			"random_max" => 10,
			"packages" => false,
			"receive_sms" => 1,
			"global_device" => 2,
			"global_priority" => 2,
			"global_slots" => 1,
			"country" => "US",
			"rate" => "0.01",
			"fcm_token" => false,
			"create_date" => date("Y-m-d H:i:s", time())
		];

		if($this->system->create("devices", $filtered)):
			$this->cache->container("user.{$access["hash"]}");
			$this->cache->clear();

			try {
				$echoToken = $this->echo->token($this->guzzle, $this->cache);

				if($echoToken):
					$this->echo->notify($access["hash"], [
						"type" => "table",
						"modal" => true
					], $this->guzzle, $this->cache);
				endif;
			} catch(Exception $e){
				// Ignore
			}

			if(!empty(system_mailing_address) && in_array("admin_new_device", explode(",", system_mailing_triggers))):
				$mailingContent = <<<HTML
				<p>Hi there!</p>
				<p>This is to inform you that a new device has been linked to account: <strong>{$request["email"]}</strong></p> 
				HTML;

    			$this->mail->send([
					"title" => system_site_name,
					"data" => [
						"subject" => mail_title("Admin Alert Message from " . system_site_name . "!"),
						"content" => $mailingContent
					]
				], system_mailing_address, "_mail/default.tpl", $this->smarty);
    		endif;

			response(200, false, [
				"hash" => $this->hash->encode($access["id"], system_token),
				"name" => $request["device_model"],
				"receive_sms" => $filtered["receive_sms"],
				"random_send" => $filtered["random_send"],
				"random_min" => $filtered["random_min"],	
				"random_max" => $filtered["random_max"]
			]);
		else:
			response(500, "Failed to create device!", null);
		endif;
	}

	public function scan()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset(
			$request["hash"], 
			$request["device_unique"], 
			$request["device_model"], 
			$request["device_version"], 
			$request["device_manufacturer"]
		))
			response(400, "Invalid Request!", null);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403, "Invalid Request!", null);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403, "Invalid Request!", null);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        set_language(system_default_lang);

        if($this->device->checkUserHash($hash) < 1)
			response(403, __("device_scan_qrcodeinvalid"), null);

        $subscription = set_subscription(
	        $this->system->checkSubscription($uid), 
	        $this->system->getSubscription(false, $uid), 
	        $this->system->getSubscription(false, false, true)
	    );

		if(empty($subscription))
			response(403, __("device_scan_nosub"), null);

		if($this->device->checkSuspension($uid) > 0)
			response(403, __("device_scan_usersuspended"), null);

		if($this->device->checkDevice($request["device_unique"]) > 0):
			$device = $this->device->getDevice($request["device_unique"]);

			if($device["uid"] != $uid):
				$userEmail = $this->device->getUserEmail($device["uid"]);
				response(403, ___(__("app_response_devicealreadylinkednew"), [maskEmail($userEmail)]), null);
			endif;

			try {
				$echoToken = $this->echo->token($this->guzzle, $this->cache);

				if($echoToken):
					$this->echo->notify($hash, [
						"type" => "table",
						"modal" => true
					], $this->guzzle, $this->cache);
				endif;
			} catch(Exception $e){
				// Ignore
			}

			response(200, false, [
				"hash" => $this->hash->encode($uid, system_token),
				"name" => $device["name"],
				"receive_sms" => $device["global_device"] < 2 ? 2 : $device["receive_sms"],
				"random_send" => $device["random_send"],
				"random_min" => $device["random_min"],
				"random_max" => $device["random_max"]
			]);
		endif;

		if(limitation($subscription["device_limit"], $this->system->countDevices($uid)))
			response(403, __("device_scan_nomoredevices"), null);

    	date_default_timezone_set($this->device->getUserTimezone($uid));

		$filtered = [
			"uid" => $uid,
			"did" => $request["device_unique"],
			"name" => $request["device_model"],
			"version" => $request["device_version"],
			"manufacturer" => ucfirst($request["device_manufacturer"]),
			"random_send" => 1,
			"random_min" => 5,
			"random_max" => 10,
			"packages" => false,
			"receive_sms" => 1,
			"global_device" => 2,
			"global_priority" => 2,
			"global_slots" => 1,
			"country" => "US",
			"rate" => "0.01",
			"fcm_token" => false,
			"create_date" => date("Y-m-d H:i:s", time())
		];

		if($this->system->create("devices", $filtered)):
			$this->cache->container("user.{$hash}");
			$this->cache->clear();

			try {
				$echoToken = $this->echo->token($this->guzzle, $this->cache);

				if($echoToken):
					$this->echo->notify($hash, [
						"type" => "table",
						"modal" => true
					], $this->guzzle, $this->cache);
				endif;
			} catch(Exception $e){
				// Ignore
			}

			if(!empty(system_mailing_address) && in_array("admin_new_device", explode(",", system_mailing_triggers))):
				$userAccount = $this->system->getUser($uid);

				$mailingContent = <<<HTML
				<p>Hi there!</p>
				<p>This is to inform you that a new device has been linked to account: <strong>{$userAccount["email"]}</strong></p> 
				HTML;

    			$this->mail->send([
					"title" => system_site_name,
					"data" => [
						"subject" => mail_title("Admin Alert Message from " . system_site_name . "!"),
						"content" => $mailingContent
					]
				], system_mailing_address, "_mail/default.tpl", $this->smarty);
    		endif;

			response(200, false, [
				"hash" => $request["hash"],
				"name" => $request["device_model"],
				"receive_sms" => $filtered["receive_sms"],
				"random_send" => $filtered["random_send"],
				"random_min" => $filtered["random_min"],
				"random_max" => $filtered["random_max"]
			]);
		else:
			response(500, "Failed to create device!", null);
		endif;
	}

	public function report()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset($request["hash"], $request["did"], $request["uid"], $request["mid"], $request["code"], $request["status"]))
			response(400);

		if(!in_array($request["status"], ["failed", "success"]))
			response(400);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        set_language($this->device->getUserLanguage($uid));

		if($this->device->checkDevice($request["did"]) < 1)
        	response(403);

        $device = $this->device->getDevice($request["did"]);

        if($device["uid"] != $uid):
			$userEmail = $this->device->getUserEmail($device["uid"]);
			response(403, ___(__("app_response_devicealreadylinkedunablenew"), [maskEmail($userEmail)]));
		endif;

        date_default_timezone_set($this->device->getUserTimezone($request["uid"]));

        if($this->system->checkQuota($request["uid"]) < 1):
			$this->system->create("quota", [
				"uid" => $request["uid"],
				"sent" => 0,
				"received" => 0,
				"wa_sent" => 0,
				"wa_received" => 0,
				"ussd" => 0,
				"notifications" => 0
			]);
		endif;

        $this->system->update($request["mid"], false, "sent", [
			"status" => $request["status"] === "success" ? 3 : 4,
			"status_code" => $request["code"],
			"create_date" => date("Y-m-d H:i:s", time())
        ]);

		if($device["global_device"] < 2 && $this->system->getPartnership($uid) < 2 && $request["uid"] != $uid):
			$currency = country($device["country"])->getCurrency()["iso_4217_code"];

			$final_price = $this->titansys->calculatePartnerSendPrice($currency, $device["rate"], $this->guzzle, $this->cache);
	        
			if($final_price):
				$commission = (float) (system_partner_commission / 100) * $final_price;

				if($request["status"] < 2):
					$this->system->credits($request["uid"], "decrease", $final_price);
					$this->system->earnings($uid, "increase", $final_price - $commission);

					$this->system->create("commissions", [
						"pid" => $uid,
						"sid" => $request["uid"],
						"mid" => $request["mid"],
						"did" => $request["did"],
						"original_amount" => $final_price,
						"commission_amount" => $commission,
						"currency" => system_currency,
						"create_date" => date("Y-m-d H:i:s", time())
					]);
				endif;
			endif;
    	endif;

		try {
			$echoToken = $this->echo->token($this->guzzle, $this->cache);

			switch($request["code"]):
				case "SMS_SENT":
					$notifyMessage = __("device_api_messagesent");
					$notifyType = 1;
					break;
				case "SMS_DELIVERED":
					$notifyMessage = __("device_api_messagedelivered");
					$notifyType = 1;
					break;
				case "DELIVERY_PENDING":
					$notifyMessage = __("device_api_messagepending");
					$notifyType = 2;
					break;
				case "DELIVERY_FAILED":
					$notifyMessage = __("device_api_messagedeliveryfailed");
					$notifyType = 3;
					break;
				default:
					$notifyMessage = __("device_api_messagefailed");
					$notifyType = 3;
			endswitch;

			if($echoToken):
				$this->echo->notify($hash, [
					"type" => "message",
					"status" => $notifyType,
					"content" => ___($notifyMessage, ["<strong><a href=\"#\" class=\"text-warning\" system-toggle=\"view/sent-{$request["mid"]}\">#{$request["mid"]}</a></strong>", "<strong>{$device["name"]}</strong>"])
				], $this->guzzle, $this->cache);
			endif;
		} catch(Exception $e){
			// Ignore
		}

		if($request["uid"] == $uid):
			$this->process->_sanitize = $this->sanitize;
			$this->process->_guzzle = $this->guzzle;
			$this->process->_lex = $this->lex;

			/**
			 * Process Action Hooks
			 */

			$sent = $this->system->getSent($request["mid"]);

			if($sent):
				$hooks = $this->process->actionHooks($uid, 1, 1, $sent["phone"], $sent["message"], $this->device->getActions($uid, 1));

				if(!empty($hooks)):
					foreach($hooks as $hook):
						$this->system->create("events", [
							"uid" => $uid,
							"type" => 2,
							"create_date" => date("Y-m-d H:i:s", time())
						]);
					endforeach;
				endif;
			endif;
		endif;

		response(200);
	}

	public function received()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset($request["hash"], $request["did"], $request["sim"], $request["message_id"], $request["sender"], $request["message"], $request["attachment"]))
			response(400);
		
		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        set_language($this->device->getUserLanguage($uid));

        $subscription = set_subscription(
            $this->system->checkSubscription($uid), 
            $this->system->getSubscription(false, $uid), 
            $this->system->getSubscription(false, false, true)
        );

		if(empty($subscription))
			response(403);

		if($this->device->checkDevice($request["did"]) < 1)
        	response(403);

        $device = $this->device->getDevice($request["did"]);

        if($this->system->checkQuota($uid) < 1):
			$this->system->create("quota", [
				"uid" => $uid,
				"sent" => 0,
				"received" => 0,
				"wa_sent" => 0,
				"wa_received" => 0,
				"ussd" => 0,
				"notifications" => 0
			]);
		endif;

		$received_date = date("Y-m-d", time());

        if($device["global_device"] < 2):
        	if($this->system->checkDeleted($uid, $request["message_id"], $request["did"]) < 1):
	        	$this->system->create("deleted", [
					"rid" => $request["message_id"],
					"uid" => $uid,
					"did" => $request["did"]
				]);
	        endif;

			response(500);
        endif;

        if(!empty($request["message"])):
        	date_default_timezone_set($this->device->getUserTimezone($uid));

        	if(strtolower(substr($request["message"], 0, 4)) === "stop"):
            	try {
				    $number = $this->phone->parse($request["sender"]);

				    if(!$number->isValidNumber())
						response(403);

					$phone = $number->format(Brick\PhoneNumber\PhoneNumberFormat::E164);

					if($this->system->checkUnsubscribed($uid, $phone) < 1):
						$this->system->create("unsubscribed", [
							"uid" => $uid,
							"phone" => $phone
						]);
					endif;
				} catch(Brick\PhoneNumber\PhoneNumberParseException $e) {
					// Ignore
				}
            endif;

        	if($this->system->checkDeleted($uid, $request["message_id"], $request["did"]) < 1):
				if($this->device->checkReceived($request["message_id"], $uid, $request["did"]) < 1):
	        		if(!limitation($subscription["receive_limit"], $this->system->countQuota($uid, "received"))):
	        			$filtered = [
							"rid" => $request["message_id"],
							"uid" => $uid,
							"did" => $request["did"],
							"slot" => $request["sim"],
							"phone" => $request["sender"],
							"message" => $request["message"],
							"receive_date" => date("Y-m-d H:i:s", time())
						];

						$received = $this->system->create("received", $filtered);

						if($received):
							try {
								$echoToken = $this->echo->token($this->guzzle, $this->cache);

								if($echoToken):
									$this->echo->notify($hash, [
										"type" => "message",
										"status" => 1,
										"content" => ___(__("device_received_smsreceived"), ["<strong><a href=\"#\" class=\"text-warning\" system-toggle=\"view/received-{$received}\">" . __("response_notify_smsreceivedmessage") . "</a></strong>", "<strong>{$device["name"]}</strong>"])
									], $this->guzzle, $this->cache);
								endif;
							} catch(Exception $e){
								// Ignore
							}

							$this->system->increment($uid, "received");

							$this->process->_sanitize = $this->sanitize;
							$this->process->_guzzle = $this->guzzle;
							$this->process->_lex = $this->lex;

							/**
							 * Process Webhooks
							 */

							$webhooks = $this->process->webhooks($uid, "sms", [
								"id" => (int) $received,
								"rid" => (int) $filtered["rid"],
								"sim" => $filtered["slot"],
								"device" => $filtered["did"],
								"phone" => $filtered["phone"],
								"message" => $filtered["message"],
								"timestamp" => strtotime($filtered["receive_date"])
							], $this->device->getWebhooks($uid, "sms"));

							if(!empty($webhooks)):
								foreach($webhooks as $webhook):
									$this->system->create("events", [
										"uid" => $uid,
										"type" => 1,
										"create_date" => date("Y-m-d H:i:s", time())
									]);
								endforeach;
							endif;

							/**
							 * Process Action Hooks
							 */

							$hooks = $this->process->actionHooks($uid, 1, 2, $filtered["phone"], $filtered["message"], $this->device->getActions($uid, 1));

							if(!empty($hooks)):
								foreach($hooks as $hook):
									$this->system->create("events", [
										"uid" => $uid,
										"type" => 2,
										"create_date" => date("Y-m-d H:i:s", time())
									]);
								endforeach;
							endif;

							/**
							 * Process Action Autoreplies
							 */

							$autoreplies = $this->process->actionAutoreplies($uid, 1, $filtered["phone"], $filtered["message"], $this->device->getActions($uid, 2), $subscription, [
								"sim" => $filtered["slot"],
								"device" => $filtered["did"],
								"titansys" => $this->titansys
							]);

							if(!empty($autoreplies)):
								foreach($autoreplies as $autoreply):
									$sendAutoreply = $this->system->create("sent", [
										"cid" => 0,
							        	"uid" => $uid,
										"did" => $filtered["did"],
										"gateway" => 0,
										"sim" => $filtered["slot"],
										"mode" => 1,
										"phone" => $filtered["phone"],
										"message" => $autoreply["message"],
										"status" => 1,
										"status_code" => false,
										"priority" => 2,
										"api" => 2,
										"create_date" => date("Y-m-d H:i:s", time())
							        ]);

									if($sendAutoreply):
										$this->system->create("events", [
											"uid" => $uid,
											"type" => 2,
											"create_date" => date("Y-m-d H:i:s", time())
										]);
									endif;
								endforeach;

								$device = $this->system->getDevice($uid, $filtered["did"], "did");

								if($device):
									$this->fcm->sendWithToken($device["fcm_token"], [
										"action" => "message_request"
									]);
								endif;
							endif;
						endif;
					endif;
	        	endif;
			endif;
	    endif;

        response(200);
	}

	public function response()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset($request["hash"], $request["did"], $request["ussd_id"], $request["response"]))
			response(400);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        set_language($this->device->getUserLanguage($uid));

		if($this->device->checkDevice($request["did"]) < 1)
        	response(403);

        $device = $this->device->getDevice($request["did"]);

        if($this->system->checkQuota($uid) < 1):
			$this->system->create("quota", [
				"uid" => $uid,
				"sent" => 0,
				"received" => 0,
				"wa_sent" => 0,
				"wa_received" => 0,
				"ussd" => 0,
				"notifications" => 0
			]);
		endif;

        if(!empty($request["ussd_id"]) && !empty($request["response"])):
        	date_default_timezone_set($this->device->getUserTimezone($uid));

        	$filtered = [
        		"response" => $request["response"],
        		"status" => 3,
        		"create_date" => date("Y-m-d H:i:s", time())
        	];

        	$ussd = $this->system->update($request["ussd_id"], false, "ussd", $filtered);

        	if($ussd):
				$ussdCode = $this->device->getUssd($request["ussd_id"]);

				try {
					$echoToken = $this->echo->token($this->guzzle, $this->cache);

					if($echoToken):
						$this->echo->notify($hash, [
							"type" => "ussd",
							"status" => 1,
							"content" => ___(__("device_ussd_responsereceive"), ["<strong>{$device["name"]}</strong>"])
						], $this->guzzle, $this->cache);
					endif;
				} catch(Exception $e){
					// Ignore
				}

				$this->system->increment($uid, "ussd");

				$this->system->create("utilities", [
        			"uid" => $uid,
        			"type" => 1,
        			"create_date" => date("Y-m-d H:i:s", time())
	        	]);

				$this->process->_sanitize = $this->sanitize;
				$this->process->_guzzle = $this->guzzle;

				/**
				 * Process Webhooks
				 */

	        	$webhooks = $this->process->webhooks($uid, "ussd", [
					"id" => (int) $ussd,
					"sim" => (int) $ussdCode["sim"],
					"device" => $ussdCode["did"],
					"code" => $ussdCode["code"],
					"response" => $filtered["response"],
					"timestamp" => strtotime($filtered["create_date"])
				], $this->device->getWebhooks($uid, "ussd"));

				if(!empty($webhooks)):
					foreach($webhooks as $webhook):
						$this->system->create("events", [
							"uid" => $uid,
							"type" => 1,
							"create_date" => date("Y-m-d H:i:s", time())
						]);
					endforeach;
				endif;
        	endif;
	    endif;

        response(200);
	}

	public function notification()
	{
		$this->header->allow();

		$request = $this->sanitize->json();

		if(!isset($request["hash"], $request["did"], $request["appName"], $request["packageName"], $request["text"]))
			response(400);

		$decode = $this->hash->decode($request["hash"], system_token);

		if(!$decode)
			response(403);

		$uid = $decode;
		$hash = md5($uid);

		if($this->device->checkUserId($uid) < 1)
    		response(403);

		$this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        set_language($this->device->getUserLanguage($uid));

        $subscription = set_subscription(
            $this->system->checkSubscription($uid), 
            $this->system->getSubscription(false, $uid), 
            $this->system->getSubscription(false, false, true)
        );

		if(empty($subscription))
			response(403);

		if(limitation($subscription["notification_limit"], $this->system->countQuota($uid, "notifications")))
			response(403);

		if($this->device->checkDevice($request["did"]) < 1)
        	response(403);

        $device = $this->device->getDevice($request["did"]);

        if($this->system->checkQuota($uid) < 1):
			$this->system->create("quota", [
				"uid" => $uid,
				"sent" => 0,
				"received" => 0,
				"wa_sent" => 0,
				"wa_received" => 0,
				"ussd" => 0,
				"notifications" => 0
			]);
		endif;

        if(!empty($request["packageName"]) && !empty($request["appName"])):
        	date_default_timezone_set($this->device->getUserTimezone($uid));

        	$filtered = [
        		"uid" => $uid,
        		"did" => $request["did"],
        		"package" => $request["packageName"],
        		"title" => $request["appName"],
        		"text" => $request["text"],
        		"create_date" => date("Y-m-d H:i:s", time())
        	];

        	$notification = $this->system->create("notifications", $filtered);

        	if($notification):
				try {
					$echoToken = $this->echo->token($this->guzzle, $this->cache);

					if($echoToken):
						$this->echo->notify($hash, [
							"type" => "notification",
							"status" => 1,
							"content" => ___(__("device_notification_notireceive"), ["<strong>{$device["name"]}</strong>"])
						], $this->guzzle, $this->cache);
					endif;
				} catch(Exception $e){
					// Ignore
				}

	        	$this->system->increment($uid, "notifications");

	        	$this->system->create("utilities", [
        			"uid" => $uid,
        			"type" => 2,
        			"create_date" => date("Y-m-d H:i:s", time())
	        	]);

	        	$this->process->_sanitize = $this->sanitize;
				$this->process->_guzzle = $this->guzzle;

				/**
				 * Process Webhooks
				 */

	        	$webhooks = $this->process->webhooks($uid, "notifications", [
					"id" => (int) $notification,
					"device" => $filtered["did"],
					"package" => $filtered["package"],
					"title" => $filtered["title"],
					"content" => $filtered["text"],
					"timestamp" => strtotime($filtered["create_date"])
				], $this->device->getWebhooks($uid, "notifications"));

				if(!empty($webhooks)):
					foreach($webhooks as $webhook):
						$this->system->create("events", [
							"uid" => $uid,
							"type" => 1,
							"create_date" => date("Y-m-d H:i:s", time())
						]);
					endforeach;
				endif;
        	endif;
	    endif;

        response(200);
	}
}