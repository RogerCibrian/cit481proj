<?php
if (isset($_POST["reset-password-submit"])) {
include 'connect.php';

$uname = $_SESSION["name"];
$currentpass = $_POST["cur-pwd"];
$newpassword = $_POST["pwd"];
$passwordRepeat = $_POST["pwd-repeat"];

echo "$currentpass";
echo "$newpassword";
echo "$passwordRepeat";
echo "$uname";

if (empty($currentpass) || empty($newpassword) || empty($passwordRepeat)){
/*send them back to previous page*/
	$url = "change_pw.php?errmsg=empty";
	header("Location: $url");
        exit();}


else if ($newpassword != $passwordRepeat){
/*send them back to previous page*/
	$url = "change_pw.php?errmsg=newpassnomatch";
        header("Location: $url");
	exit();}

//echo "after empty password and pass match if statements";

if ($stmt = $con->prepare('SELECT user_password FROM users WHERE user_username = ?')){
	$stmt->bind_param('s', $uname);
	$stmt->execute(); 
	$stmt->store_result(); //stores result to confirm account exists
	if ($stmt->num_rows > 0){ //confirms account in database
		$stmt->bind_result($user_password);
		$stmt->fetch();
		if (!password_verify($currentpass, $user_password)){
			/*send them back to previous page*/
			$url = "change_pw.php?errmsg=crntpassnomatch";
        		header("Location: $url");
			exit();}
		else {	
			$sql = "UPDATE users SET user_password=? WHERE user_username=?;";
			$stmt = mysqli_stmt_init($con);

			if (!mysqli_stmt_prepare($stmt, $sql)){
				echo "error conencting to db - update password user row";
	       		 	exit();}
	     	  	else {
				$newPwdHash = password_hash($newpassword, PASSWORD_DEFAULT);

//				echo "$newPwdHash";
//				echo "$newpassword";

	        		mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $uname);
        			mysqli_stmt_execute($stmt);

				header("Location: profile_page.php?msg=pwdupdated");
				}
		}
	}
	else {
		echo "error fetching data";
		exit();
	}
}
else {
	echo "error accessing db";
	exit();}
}
else {
header("Location: index.php");
}

?>
