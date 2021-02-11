<?php
session_start();

include 'connect.php';
$userEmail = $_SESSION['userEmail'];

$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
$stmt = mysqli_stmt_init($con);

        if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "Error accessing database, try again.";
                exit();}
        else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);}


session_destroy();

//redirect user to home page
header('location:/index.php');
?>
