<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/cit481/vendor/autoload.php';

//echo !extension_loaded('openssl')?"Not Avail":"Avail";

if(isset($_POST['submitbtn'])){ /*checks whether user submitted form*/
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
	$login = parse_ini_file('/var/app/login.ini', true); // Parse external INI file on server
	/*SMTP settings for external mail server*/
	//$mail->SMTPDebug = 2;
	$mail->IsSMTP();
	$mail->Host = 'mail.rottenpotatoes.org';
	$mail->SMTPAuth = true;
	$mail->AuthType='LOGIN';
	$mail->Username = $login['email']['username']; //Saving data in file outside of github and root directory to prevent unauthed access to email
	$mail->Password = $login['email']['password'];
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';

//	don't allow less secure certs 
	$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => true,
		'verify_peer_name' => true,
		'allow_self_signed' => false
		)
	);

	/*email settings*/
	$mail->isHTML(true);
	$mail->setFrom($login['email']['username'], $name); // can't do DKIM signing w/ forged from field
	$mail->addAddress($login['email']['username']);
	$mail->addReplyTo($email, $name);
	$mail->Subject = $subject;
	$mail->Body = $body;

	if(!$mail->Send()){
//	use these echos for debugging, comment out page redirect
	//echo "message not sent: " . $mail->ErrorInfo;} 
	//else echo "message sent";}
	header("location:/Contact_Us.php?msg=err");}
	else{
	header("location:/Contact_Us.php?msg=suc");}}
//	$mail->ClearAddresses();}
?>