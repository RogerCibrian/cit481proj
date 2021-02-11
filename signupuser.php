<?php
//session_start();
$DB_HOST = 'rottenpotatodb.cjmbcqw5ubno.us-east-1.rds.amazonaws.com:3306';
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

if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['username']) || empty($_POST['mailaddr']) || empty($_POST['user_pwd']) || empty($_POST['re_user_pwd'])){
   // header("Location: /Sign_Up.html?error=emptyfields&username=".$username.$
    /*stop code is user makes a mistake when inputing fields*/
    exit('please complete registration form');
}

//code for validation********************
//using POST to display the received data

if(!filter_var($_POST['mailaddr'], FILTER_VALIDATE_EMAIL)){
	header("Location: /Sign_Up.html?error=invalidemailaddress");
    	exit();
}

if(preg_match("/^[a-zA-Z0-9-_]*$/", $_POST['username']) == 0){
	header("Location: /Sign_Up.html?error=invalidusername=");
	exit();
}

//maybe add more validation to password like minimum/max.

//check if account exists

if ($stmt = $con->prepare('SELECT user_id, user_password FROM users WHERE user_username = ?')) {
//bind parameters (s = string, i = int), hash the password
$stmt->bind_param('s', $_POST['username']);
$stmt->execute();
$stmt->store_result();
// store result to check if exists
if ($stmt->num_rows > 0){
//username exists
	echo 'Username exists, please choose another!';
} else {
//insert new account
$timestamp=date("Y-m-d h:i:s");
if ($stmt = $con->prepare('INSERT INTO users (user_username, user_password, user_firstname, user_lastname, user_date, user_email) VALUES (?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);
	$stmt->bind_param('ssssss', $_POST['username'], $password, $_POST['fname'], $_POST['lname'],$timestamp, $_POST['mailaddr']);
	$stmt->execute();
	//print_r($_POST);
	//redirect user after 3 seconds to login screen
	header( "refresh:3; url=/Member_login.php");
	echo 'You have successfully registered, you can now login!';

  } else {
 	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
  }
//one of these closing curly braCKETS is not necessary i think but it still works 
}
$stmt->close();
} else {
echo 'Could not prepare statement!';
}
$con->close();
?>
