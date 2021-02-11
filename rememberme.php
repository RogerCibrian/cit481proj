<?php
// if session name empty but remember cookie is set
if (empty($_SESSION['name']) && !empty($_COOKIE['remember'])){
	list($selector, $token) = explode(':', $_COOKIE['remember']);

	include 'connect.php';

	$currentDate = date("U");

// select cookie info from db where selector matches cookie and expire date greater than current date
	$sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >=?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)){
        	echo "Error connecting to db";
        	exit();}
	else {
        	mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
	        mysqli_stmt_execute($stmt);

// if no results, cookie no longer valid
	        $result = mysqli_stmt_get_result($stmt);
       		if (!$row = mysqli_fetch_assoc($result)){
		return;
		}
        	else{
	        $tokenBin = hex2bin($token);
        	$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

// verify token in db matches token in cookie
	        if ($tokenCheck === false){
       	 	echo "error validating tokenCheck";
       		exit();}

// if match fetch row from db
	        elseif ($tokenCheck === true){
       		$tokenEmail = $row['pwdResetEmail'];
       		$sql = "SELECT * FROM users WHERE user_email=?;";
	        $stmt = mysqli_stmt_init($con);


// fetch username
                if ($stmt = $con->prepare('SELECT user_username, user_id FROM users WHERE user_email = ?;')){
	                $stmt->bind_param('s', $tokenEmail);
                        $stmt->execute();
                        $stmt->store_result();
                        if ($stmt->num_rows > 0){
        	                $stmt->bind_result($user_username, $user_id);
                                $stmt->fetch();}
                        else {
                 	       echo "error fetching data";
                               exit();}}
                else {
	                echo "error accessing db";
                        exit();}}}}

// set session variables
		session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $user_username;
		$_SESSION['userEmail'] = $tokenEmail;
		$_SESSION['id'] = $user_id;

// create new cookie and regenerate validators
// delete old cookie tokens from db
		$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
		$stmt = mysqli_stmt_init($con);

	        if (!mysqli_stmt_prepare($stmt, $sql)){
        	        echo "Error accessing database, try again.";
               		exit();}
	        else {
        		mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
        		mysqli_stmt_execute($stmt);}

// generate new tokens
		$newSelector = bin2hex(random_bytes(8));
		$newToken = random_bytes(32);

// set cookie details
		setcookie(
			'remember',
                        $newSelector . ':' . bin2hex($newToken),
                        time() + 864000,
                        '/',
                        'rottenpotatoes.games'
// set to true for TLS-only                     true,
// set to true for http-only                    true
                        );

// store cookie validators to db
			$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
                        $stmt = mysqli_stmt_init($con);
			if (!mysqli_stmt_prepare($stmt, $sql)){
                        	echo "Error preparing cookie set. Try again.";
                                exit();}
               	        else {
                        	$hashedToken = password_hash($newToken, PASSWORD_DEFAULT);
                                $expires = date("U") + 864000;
                                mysqli_stmt_bind_param($stmt, "ssss", $tokenEmail, $newSelector, $hashedToken, $expires);
                                mysqli_stmt_execute($stmt);}

// close stmt and connection
                                mysqli_stmt_close($stmt);
                                mysqli_close($con);

}
?>
