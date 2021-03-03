<?php
session_start();
if (isset($_POST["reset-phone-submit"])) {
include 'connect.php';

$uname = $_SESSION["name"];
$newphone = $_POST["phone"];
$phoneRepeat= $_POST["phone-repeat"];

if (empty($newphone) || empty($phoneRepeat)){
/*send them back to previous page*/
	$url = "change_phone.php?errmsg=empty";
	header("Location: $url");
        exit();}

else if ($newphone != $phoneRepeat){
/*send them back to previous page*/
	$url = "change_phone.php?errmsg=nomatch";
        header("Location: $url");
	exit();}

//echo "after empty phone and phone match if statements";

	$sql = "UPDATE users SET user_phone=? WHERE user_username=?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		echo "error connecting to db - update email user row";
   	 	exit();}
 	else {
       		mysqli_stmt_bind_param($stmt, "ss", $newphone, $uname);
      		mysqli_stmt_execute($stmt);
		header("Location: profile_page.php?msg=phoneupdated");
	}
}
else {
header("Location: index.php");
}

?>
