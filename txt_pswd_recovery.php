<?php
// require/use statments for Twilio SMS service
require '/home/cit481/vendor/autoload.php';
use Twilio\Rest\Client;

// Generate $selector + $token to create valid reset request link
if (isset($_POST["resetrequestsubmit"])){
	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);

	$url = "rottenpotatoes.org/reset_pw.php?selector=" . $selector . "&validator=" . bin2hex($token);

	$expires = date("U") + 1800;
// echo "expire var set";

// connect to db
	include 'connect.php';

// echo "connect.php working";

// set users email
	$userPhone = $_POST["phone"];

        $sql = "SELECT * FROM users WHERE user_phone=?;";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Error connecting to db";
                exit();}
        else {
                mysqli_stmt_bind_param($stmt, "s", $userPhone);
                mysqli_stmt_execute($stmt);

// if no results, no account exists under the provided phone number
                $result = mysqli_stmt_get_result($stmt);
		echo "fetching result";
                if (!$row = mysqli_fetch_assoc($result)){
//			echo "account doesnt exist";
			header("Location:passwrd_recovery_phone.php?msg=nomatch");
			exit();
              	}
                else {
               		$userEmail = $row["user_email"];
		}}

// invalidate previous reset requests
	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
	$stmt = mysqli_stmt_init($con); 

	if (!mysqli_stmt_prepare($stmt, $sql)){
		echo "Error accessing database, try again.";
		exit();}
	else {
	mysqli_stmt_bind_param($stmt, "s", $userEmail);
	mysqli_stmt_execute($stmt);}

// echo "previous requests deleted"; 

// create new request entry with valid validation tokens in pwdReset table
	$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Error preparing reset. Try again.";
                exit();}
        else {
	$hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);}

// echo "tokens added to table";

// close stmt and connection
	mysqli_stmt_close($stmt);
	mysqli_close($con);

// Beginning of twilio text settings

	$texting = parse_ini_file('/var/app/texting.ini', true); // parse external INI file

//Account ID and Auth Token from twilio.com/console
	$account_sid = $texting['twilio']['sid'];
	$auth_token = $texting['twilio']['token'];

// Twilio number
	$twilio_number = $texting['twilio']['number'];

// send sms
	try {
		$client = new Client($account_sid, $auth_token);
		$client->messages->create(
		    // Where to send a text message (your cell phone?)
		    $userPhone,
		    array(
		        'from' => $twilio_number,
		        'body' => "Reset request from RottenPotatoes.games. Link valid for 30 mins. $url "
		    )
		);
	}
// catch exception, report error
	catch (\Exception $e) {
// 		echo "Twilio failed to send";
		header("Location:passwrd_recovery_phone.php?msg=err");
	}

header("Location:passwrd_recovery_phone.php?msg=suc");
}
else {
// triggered by !($_POST)
header("Location:passwrd_recovery_phone.php?msg=err");
}
?>
