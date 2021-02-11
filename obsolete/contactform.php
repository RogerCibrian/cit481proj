<?php

/*if we did submit contact form   */
/* name of submit button is submit*/
/*  inside the (condition) of if statement*/
/* POST method*/
if(isset($_POST['submit'])){
    /* script to send message to email*/
    /* first is to get the actual data that user wrote in input fields*/

    /*variables*/
    $name = $_POST['name'];
    $subject = $_POST['subject'];

     /* $mailFrom = $_POST['email']; */
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo= "RottenPotatoes20@yahoo.com";  /* email of RottenPotatoes*/

    /*variable for Header & display email addr 
    of person who is sending the message */
    $headers= "From: ".$mailFrom 
    
    /*actual message*/
    $text = "You have recieved an e-mail from ".$name.".\n\n".$message;
    /* PHP function*/
    /* 3 parameters:
    parameter1: email  that we want to send to the RottenPotatoes' email addr
    parameter2: subject of mail
    parameter3: actual message of the mail
       */
    mail($mailTo, $subject, $text, $headers);
    /*onc mail is sent, redirect to index.html*/
    /*header("Location: index.php?mailsend"); DONT DELETE THIS COMMENT*/
    header("Location: index.html?mailsend");

}


