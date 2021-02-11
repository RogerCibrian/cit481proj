<?php
if (isset($_POST["reset-password-submit"])) {

$selector = $_POST["selector"];
$validator = $_POST["validator"];
$newpassword = $_POST["pwd"];
$passwordRepeat = $_POST["pwd-repeat"];

//echo "$newpassword";
//echo "$passwordRepeat";

if (empty($newpassword) || empty($passwordRepeat)){
/*send them back to previous page, need to include validator and selector for this to work*/
	$url = "reset_pw.php?selector=" . $selector . "&validator=" . $validator . "&errmsg=empty";
	header("Location: $url");
        exit();}


else if ($newpassword != $passwordRepeat){
/*send them back to previous page, need to include validator and selector for this to work*/
	$url = "reset_pw.php?selector=" . $selector . "&validator=" . $validator . "&errmsg=nomatch";
        header("Location: $url");
	exit();}

//echo "after empty password and pass match if statements";

$currentDate = date("U");

include "connect.php";

$sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?;";
$stmt = mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($stmt, $sql)){
	echo "Error connecting to db";
	exit();}
else {
	mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);
	if (!$row = mysqli_fetch_assoc($result)){
	header("Location: Passwrd_recovery.php?limit=expired");
	exit();}

	else{
	$tokenBin = hex2bin($validator);
	$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

	if ($tokenCheck === false){
	echo "error validating tokenCheck";
	exit();}

	elseif ($tokenCheck === true){
	$tokenEmail = $row['pwdResetEmail'];
	$sql = "SELECT * FROM users WHERE user_email=?;";
	$stmt = mysqli_stmt_init($con);

	if (!mysqli_stmt_prepare($stmt, $sql)){
	echo "error conencting to db - update fetch user row";
	exit();}
	else {
	mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)){
        echo "error fetching data from db";
        exit();}
	else{
	$sql = "UPDATE users SET user_password=? WHERE user_email=?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
	echo "error conencting to db - update password user row";
        exit();}
        else {
	$newPwdHash = password_hash($newpassword, PASSWORD_DEFAULT);

//	echo "$newPwdHash";
//	echo "$newpassword";

        mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
        mysqli_stmt_execute($stmt);

	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "error conencting to db - update fetch user row";
        exit();}
        else {
        mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
        mysqli_stmt_execute($stmt);
	header("Location: Member_login.php?msg=pwdupdated");
	}
	}
	}
	}
	}
	}
	}

}
else {
header("Location: index.php");}

?>
