<?php

function cleanUserData($post) {
	foreach ($post as $key => $value) {
		$post[$key] = stripslashes(strip_tags($value));
	}
	return $post;
}
if ($_POST) {
	$post = cleanUserData($_POST);
	
	$xml = "<request><lead><access>Private</access><user_id>1</user_id><campaign-id>2</campaign-id><company></company><email >{$post["email"]}</email><first-name>{$post["first_name"]}</first-name><last-name>{$post["last_name"]}</last-name><phone>{$post["last_name"]}</phone><assigned-to>1</assigned-to><blog>{$post["website"]}</blog></lead><comment>{$post["comment"]}</comment></request>";
	
	$session = curl_init();
	curl_setopt($session,CURLOPT_URL, get_option("crm_url") );
	if ($xml) {
		curl_setopt($session,CURLOPT_POST,1);
		curl_setopt($session,CURLOPT_POSTFIELDS,$xml);
	}
	curl_setopt($session,CURLOPT_HEADER,false);
	curl_setopt($session,CURLOPT_HTTPHEADER,array("Accept: application/xml","Content-Type: application/xml"));
	curl_setopt($session,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($session,CURLOPT_SSL_VERIFYPEER,false);
	try {
		$success = curl_exec($session);
	} catch (Exception $e) {
		error_log($e, 0);
		$error = "an error occurred on the server";
	}
	curl_close($session);
}
?>
