<?php session_start();
 $server = 'localhost';
 $username = 'rottenuser';
 $password = 'rotten123';
 $database = 'mydatabase';

 $con = mysqli_connect($server, $username, $password) or
	die("Error - no connection to $server");
 mysqli_select_db($con, $database) or
	die("Error - could not select $database");
?>
