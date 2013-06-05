<?php 
	$method = "AES-128-CBC";
	$password = "phah2maJe*25rAf58BeceJUfruXege58";
	$iv = "abcdasdfasdfasdf";

if ( isset($_GET['token']) ) {
	// Decrypting
	$decrypted = openssl_decrypt($_GET['token'], $method, $password, false, $iv);
	$parts = explode(":", $decrypted);
	$uid = $parts[0];
	$password = $parts[1];
	$calendar = $parts[2];

	$context = stream_context_create(array(
	    'http' => array(
	        'header'  => "Authorization: Basic " . base64_encode("$uid:$password")
	    )
	));

	header("Content-type: text/calendar; charset=utf-8");
	header('Content-Disposition: inline; filename=calendar.ics');
	header("Expires: Fri, 01 Jan 1990 00:00:00 GMT");
	header("Cache-Control: no-cache, no-store, max-age=0, must-revalidate");
	header("Pragma: no-cache");
	$lines = explode("\n", file_get_contents("https://cloud.sontia.com/remote.php/caldav/calendars/$uid/$calendar?export", false, $context));
	$i=0;
	foreach ($lines as $line) {
		if ($i == 3) print "X-WR-CALNAME:".ucfirst($calendar)."\r\n";
		print $line;
		$i++;
	}
	exit;
}
?>