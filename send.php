<?php

if(isset( $_POST['yourName']))
$yourName = $_POST['yourName'];
if(isset( $_POST['yourEmail']))
$yourEmail = $_POST['yourEmail'];
if(isset( $_POST['yourPhone']))
$yourPhone = $_POST['yourPhone'];
if(isset( $_POST['yourMessage']))
$yourMessage = $_POST['yourMessage'];
if(isset( $_POST['requiredContact']))
$requiredContact = $_POST['requiredContact'];

$month = date("F");
$day = date("j");
$year = date("Y");
$currentDay = $month . " " . $day . ", " . $year;
//Set timezone to America/Adak = Hawaii Timezone
date_default_timezone_set ("Pacific/Honolulu");
$currentTime = date("g:ia");
//$sendTime = '<p>Sent on ' . $currentDay . ' at ' . $currentTime . '</p>';



$fullMessage = '<html><body>';
$fullMessage .= '<p>Sent ' . $currentDay . ' at ' . $currentTime . '</p>';
$fullMessage .= '<p>' . $yourName .' says: ' . $yourMessage;
$fullMessage .= '<p>Email: ' . $yourEmail .'<br>';
$fullMessage .= 'Phone: ' . $yourPhone .'<br>';
$fullMessage .= '</body></html>';

// echo $fullMessage;

if ($requiredContact == ''){
	//echo "<p>Begin mail function</p>";
	
	$recipient = "mike@mkdesignmarketing.com, nickloewenstine@gmail.com";
	$subject = "New Customer Message: Adventure Diving Website";
	$content = $fullMessage;
	$headers[] = 'From: ' . $yourName . ' <' . $yourEmail . '>';
	$headers[] = 'Reply-To: ' . $email;
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-Type: text/html; charset=ISO-8859-1';

	$success = mail($recipient, $subject, $content, implode("\r\n", $headers));

	if (!$success) {
    	$errorMessage = error_get_last()['message'];
		echo '<p>' . $errorMessage . '</p>';
	}else{
		//echo '<p> No Error...</p>';
		header('Location: /message-sent.php');
	}
}
?>
