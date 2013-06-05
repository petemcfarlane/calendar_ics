<?php 
OCP\JSON::checkLoggedIn();
OCP\JSON::checkAppEnabled('calendar_ics');
OCP\JSON::callCheck();

if ( isset($_POST['name']) && isset($_POST['password']) && isset($_POST['calendar']) ) {
	$method = "AES-128-CBC";
	$password = "phah2maJe*25rAf58BeceJUfruXege58";
	$iv = "abcdasdfasdfasdf";

	$string = "$_POST[name]:$_POST[password]:$_POST[calendar]";
	$encrypted = openssl_encrypt($string, $method, $password, false, $iv);
	$link = OC_Helper::linkToAbsolute( 'calendar_ics', 'feed.php' ) . "?token=" . urlencode($encrypted);

	OCP\JSON::success( array("link" => $link ));
	exit;
}