
<?php //session_start();
 $DB_HOST = 'rottenpotatodb.cjmbcqw5ubno.us-east-1.rds.amazonaws.com:3306';
 $DB_USER = 'rottenuser';
 $DB_PASS = 'rotten123';
 $DB_NAME = 'mydatabase';


$con = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
//check connection to DB
if ($con->connect_errno) {
  echo "Failed to connect to DB: " . $con->connect_error;
}
?>
