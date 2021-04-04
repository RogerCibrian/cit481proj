<?php
ob_start();
session_start();
$DB_HOST = 'localhost';
$DB_USER = 'rottenuser';
$DB_PASS = 'rotten123';
$DB_NAME = 'mydatabase';

$con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
//check connection to DB
if(mysqli_connect_errno()) {
  exit('Failed to connect to DB: ' . mysqli_connect_error());
}

if(!isset($_POST['username'], $_POST['lname'], $_POST['fname'], $_POST['user_pwd'], $_POST['mailaddr'])) { 
//if coulnt get the info then...
	exit('please fill in form');
}

if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['username']) || empty($_POST['mailaddr']) || empty($_POST['user_pwd']) || empty($_POST['re_user_pwd']) || empty($_POST['phone'])){
	header("location:/Sign_Up.php?error=emptyfields");
}

//code for validation********************
//using POST to display the received data

if(!filter_var($_POST['mailaddr'], FILTER_VALIDATE_EMAIL)){
	header("Location: /Sign_Up.php?error=invalidemailaddress");
    exit();
}

if(preg_match("/^[a-zA-Z0-9-_]*$/", $_POST['username']) == 0){
	header("Location: /Sign_Up.php?error=invalidusername");
	exit();
}

// echo "check if account exists";

if ($stmt = $con->prepare('SELECT user_username, user_email, user_phone FROM users WHERE user_username = ? OR user_email = ? OR user_phone = ?')) {
	$stmt->bind_param('sss', $_POST['username'], $_POST['mailaddr'], $_POST['phone']);
	$stmt->execute();
	$stmt->store_result();
// echo "store result to check if exists";
	if ($stmt->num_rows > 0){
		//username exists
		echo 'Username or email or phone number exists, please choose another!';
		$stmt->bind_result($usernameCheck, $emailCheck, $phoneCheck);
		$stmt->fetch();
		$redirect = bin2hex(random_bytes(8));
		if ($_POST['username'] == $usernameCheck){
			header("location:/Sign_Up.php?uname=" . $redirect);
			exit;}
		elseif ($_POST['mailaddr'] == $emailCheck){
			header("location:/Sign_Up.php?mailaddr=" . $redirect);
                        exit;}
		else {
			header("location:/Sign_Up.php?phone=" . $redirect);
                        exit;}
	}
	else {
// echo "insert new account";
		$timestamp=date("Y-m-d h:i:s");
		if ($stmt = $con->prepare('INSERT INTO users (user_username, user_password, user_firstname, user_lastname, user_date, user_email, user_phone) VALUES (?, ?, ?, ?, ?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$password = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);
			$stmt->bind_param('sssssss', $_POST['username'], $password, $_POST['fname'], $_POST['lname'],$timestamp, $_POST['mailaddr'], $_POST['phone']);
			$stmt->execute();
// echo 'if "remember me" is set, create persistent login cookie';
				if (isset($_POST['remember'])){
				    $selector = bin2hex(random_bytes(8));
				    $token = random_bytes(32);

// echo "set cookie details";
					setcookie(
						'remember',
						$selector . ':' . bin2hex($token),
						time() + 864000,
						'/',
						'rottenpotatoes.org',
						true,
						true
						);

// echo "save cookie details to db";
					$userEmail = $_POST['mailaddr'];
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
// set session variables
			session_regenerate_id();
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['name'] = $_POST['username'];
			$_SESSION['userEmail'] = $_POST['mailaddr'];
			$_SESSION['userPhone'] = $_POST['phone'];
			header("location:/index.php?newacct=1");
		}
		else {
			// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
			echo 'Could not prepare statement!';
		}
	}
	$stmt->close();
}
else {
	echo 'Could not prepare statement!';
}
$con->close();
ob_end_flush();
?>