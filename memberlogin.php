<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
ob_start();

include 'connect.php';

//if (isset($_SESSION['loggedin'])){
//	header('location:/index.php');}
// Possibly add this if statment to Member_login.php

if ($stmt = $con->prepare('SELECT user_id, user_password FROM users WHERE user_username = ?')){
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute(); 
	$stmt->store_result(); //stores result to confirm account exists
	if ($stmt->num_rows > 0){ //confirms account in database
		$stmt->bind_result($user_id, $user_password);
		$stmt->fetch();
		if (password_verify($_POST['pwd'], $user_password)){

// If "remember me" is set, create persistent login cookie
				if (isset($_POST['remember'])){
				        $selector = bin2hex(random_bytes(8));
				        $token = random_bytes(32);

// set cookie details
					setcookie(
						'remember',
						$selector . ':' . bin2hex($token),
						time() + 864000,
						'/',
						'rottenpotatoes.org'
						true,
						true
						);
// fetch user email
					if ($stmt = $con->prepare('SELECT user_email FROM users WHERE user_username = ?')){
					        $stmt->bind_param('s', $_POST['username']);
					        $stmt->execute();
					        $stmt->store_result();
					        if ($stmt->num_rows > 0){ //confirms account in database
					                $stmt->bind_result($userEmail);
					                $stmt->fetch();
							$_SESSION['userEmail'] = $userEmail;}
						else {
							echo "error fetching data";
							exit();}}
					else {
						echo "error accessing db";
						exit();}


// save cookie details to db
					$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
				        $stmt = mysqli_stmt_init($con);
				        if (!mysqli_stmt_prepare($stmt, $sql)){
				                echo "Error preparing cookie set. Try again.";
				                exit();}
				        else {
				        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
					$expires = date("U") + 864000;
				        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
				        mysqli_stmt_execute($stmt);}

// close stmt and connection
   					mysqli_stmt_close($stmt);
			        	mysqli_close($con);
				}
			 session_regenerate_id();
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['name'] = $_POST['username'];
                        $_SESSION['id'] = $user_id;
			header("location:/index.php");}
		else {
			header("location:/Member_login.php?errormsg=2");}}
	else {
		header("location:/Member_login.php?errormsg=1");}
//	$stmt->close();}
}
ob_end_flush();
?>
