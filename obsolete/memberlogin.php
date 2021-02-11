<?php

/*if we did submit member log in form   */
/* name of submit button is submit*/
/*  inside the (condition) of if statement*/
/* POST method*/
if(isset($_POST['login-submit'])){


    //*connect to db */
    /* code here*/
   /* ex: require 'dbh.inc.php';*/


   /* first is to get the actual data that user wrote in input fields*/
    /*variables*/
   $username = $_POST['username'];
   $password = $_POST['pwd']; 


   /*if fields are empty return error statement*/
    if(empty($username) || empty($password)){
        header("Location: /index.html?error=emptyfields");
        exit();
    }
}
else {
    header("Location: /index.html");
    exit();
}

