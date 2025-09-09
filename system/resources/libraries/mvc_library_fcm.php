<?php

class MVC_Library_Fcm
{
	public function sendWithToken($token, $data)
	{
		if(!file_exists("system/storage/temporary/firebase.json"))
			return false;
			
		$fcm = (new Kreait\Firebase\Factory)->withServiceAccount("system/storage/temporary/firebase.json");

		$messaging = $fcm->createMessaging();

		try {
			return $messaging->send(Kreait\Firebase\Messaging\CloudMessage::withTarget("token", $token)->withData($data)->withHighestPossiblePriority());
		} catch(Exception $e){
			return false;
		}	
	}

	public function sendWithNotification($token, $title, $body, $image = false)
	{
		if(!file_exists("system/storage/temporary/firebase.json"))
			return false;
			
		$fcm = (new Kreait\Firebase\Factory)->withServiceAccount("system/storage/temporary/firebase.json");

		$messaging = $fcm->createMessaging();

		try {
			if($image):
				$notification = Kreait\Firebase\Messaging\Notification::create($title, $body)
					->withImageUrl($image);
			else:
				$notification = Kreait\Firebase\Messaging\Notification::create($title, $body);
			endif;

			return $messaging->send(Kreait\Firebase\Messaging\CloudMessage::withTarget("token", $token)->withNotification($notification));
		} catch(Exception $e){
			return false;
		}
	}
}