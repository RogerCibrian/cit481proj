<?php
if (isset($_POST["reset-email-submit"])) {
include 'connect.php';

$uname = $_SESSION["name"];
$newemail = $_POST["email"];
$emailRepeat= $_POST["email-repeat"];

if (empty($newemail) || empty($emailRepeat)){
/*send them back to previous page*/
	$url = "change_email.php?errmsg=empty";
	header("Location: $url");
        exit();}

else if ($newemail != $emailRepeat){
/*send them back to previous page*/
	$url = "change_email.php?errmsg=newpassnomatch";
        header("Location: $url");
	exit();}

//echo "after empty email and email match if statements";

	$sql = "UPDATE users SET user_email=? WHERE user_username=?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		echo "error connecting to db - update email user row";
   	 	exit();}
 	else {
       		mysqli_stmt_bind_param($stmt, "ss", $newemail, $uname);
      		mysqli_stmt_execute($stmt);

		if (!empty($_COOKIE['remember'])){
	        list($selector, $token) = explode(':', $_COOKIE['remember']);

	        $sql = "UPDATE pwdReset SET pwdResetEmail=? WHERE pwdResetSelector=?;";
	        $stmt = mysqli_stmt_init($con);
	        	if (!mysqli_stmt_prepare($stmt, $sql)){
        	        	echo "Error connecting to db";
	              		exit();}
	        	else {
        	        	mysqli_stmt_bind_param($stmt, "ss", $newemail, $selector);
	               		mysqli_stmt_execute($stmt);
			}
		}
		header("Location: profile_page.php?msg=emailupdated");
	}
}
else {
header("Location: index.php");
}

?>
