<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/cit481/vendor/autoload.php';

//echo !extension_loaded('openssl')?"Not Avail":"Avail";

if(isset($_POST['submit'])){ /*checks whether user submitted form*/
//	echo "submitted";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

//	Setup Email Body
	$body = '<p><b><font style="color:#B40633;">**Received Via RottenPotatoes Contact Form**</font></b>';
	$body .= '<br><b>From: </b>' . $name;
	$body .= '<br><b>Email: </b>' . $email . '</p>';
	$body .= '<p><b>Message: </b>' . $message . '</p>';

//	echo "require_once";
//	require_once "/usr/share/php/libphp-phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php";
//	require_once "/usr/share/php/libphp-phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php";
//	require_once "/usr/share/php/libphp-phpmailer/vendor/phpmailer/phpmailer/src/Exception.php";

//	echo "new PHPMailer";
	$mail = new PHPMailer();

//	echo "SMTP settings";
	/*SMTP settings for external mail server*/
//	$mail->SMTPDebug = 4;
	$mail->IsSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'rottenpotatoes.cit480@gmail.com';
	$mail->Password = 'C!t--480';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';

	$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
	);

	/*email settings*/
	$mail->isHTML(true);
	$mail->setFrom($email, 'Contact Mailer');
	$mail->addAddress('RottenPotatoes.cit480@gmail.com');
	$mail->addReplyTo($email, $name);
	$mail->Subject = $subject;
	$mail->Body = $body;

	if(!$mail->Send()){
//	use these echos for debugging, comment out page redirect
//	echo "message not sent: " . $mail->ErrorInfo;} 
//	else echo "message sent";}
	header("location:/Contact_Us.php?msg=err");}
	else{
	header("location:/Contact_Us.php?msg=suc");}}
//	$mail->ClearAddresses();}
?>
