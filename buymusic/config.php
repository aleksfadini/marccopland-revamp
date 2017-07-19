<?php
//start session in all pages
// if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'aleksfadini_api1.gmail.com'; //PayPal API Username
$PayPalApiPassword 		= 'PSQULLGB88M7G6NP'; //Paypal API password
$PayPalApiSignature 	= 'An5ns1Kso7MWUdW4ErQKJJJ4qi4-ASPabQd5u6FwcaZrbJ7zCyjjMObr'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://www.marccopland.com/newsite/buymusic/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://www.marccopland.com/newsite/buymusic/cancel_url.php'; //Cancel URL if user clicks cancel
?>