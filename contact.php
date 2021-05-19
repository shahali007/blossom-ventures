<?php
@session_start();
ob_start();
error_reporting(E_ERROR);
ini_set("display_errors", "On");
ini_set("allow_url_fopen", "On");

if(isset($_POST[Submit])) {
	
$services=addslashes($_POST[services]);	

	if($services=="?service=medical-supplies") { $service="Medical Supplies"; }
	if($services=="?service=hospital-management") { $service="Hospital Management"; }
	if($services=="?service=ambulance-services") { $service="Ambulance Services"; }
	if($services=="?service=veternary-services") { $service="Veternary Services"; }
	if($services=="?service=real-estate") { $service="Real Estate"; }
	if($services=="?service=transport-services") { $service="Transport Services"; }
	if($services=="?service=training-services") { $service="Training Services"; }
	if($services=="?service=network-marketing") { $service="Network Marketing"; }
	if($services=="?service=interior-decoration") { $service="Interior Decoration"; }
	if($services=="?service=event-management") { $service="Event Management"; }
	if($services=="?service=event-coverage") { $service="Event Coverage"; }
	if($services=="?service=rental-services") { $service="Rental Services"; }
	if($services=="?service=book-sales") { $service="Book Sales"; }


$name=addslashes($_POST[name]);	
$subject=addslashes($_POST[subject]);
$message=addslashes($_POST[message]);	

$to="admin@buildingewealth.net";
$subject="Blossom Venture Contact Form";	
$message="Please see to the details below.<br><br>
Services : $service<br>
Name : $name<br>
Email : $_POST[email]<br>
Phone : $_POST[phone]<br>
Subject : $subject<br>
Message : $message<br><br>";


$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $firstname $lastname <$_POST[email]>\r\n";

mail($to, $subject, $message, $headers);

header("location:contact-thanks.html"); 
}
?>
