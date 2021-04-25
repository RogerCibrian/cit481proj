<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>
    <link rel="stylesheet" href="main.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	 <!-- Google reCAPTCHA API Call -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src='./js/validateContact.js'></script>
    <!---Start of CSS style for contact form-->
    <link rel="stylesheet" href="./css/Contact_Us.css"/>
    <!---End of CSS style for contact form-->
  </head>

  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
    <?php
	include 'fullnavbar.php';
    ?>
    <!----end of Navigation Bar-->

    <!---footer fix by Sean-->
    <div id="page-container">
    <div id="content-wrap">
    <!---footer fix-->
    <!---trying to test out git push-->
	<div class="main">
    <!----Start of Contact us box-->
    <div class="Contact_container">
      <h1>Contact Us!</h1>
      <p>Please fill in this form to send us your feedback!</p>
	<?php
	if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	if($msg == 'suc'){
		echo '<b><font style="color:#28DF06;">Message sent!</font></b>';}
	else echo "<b>Message failed. Try again!</b>";}
	?>
      <form class="contact-form" name="myForm" onsubmit="return ValidateContactForm()"  method="POST" action="contactform.php">
        <input type="text" name="name" maxlength="40" placeholder="Full name" required/>
        <input type="text" name="email" id="email_addr" maxlength="40" placeholder="Your Email Address" required/>
        <input type="text" name="subject" maxlength="100" placeholder="Subject" required/>
        <textarea name="message" id="textarea-box" maxlength="200" placeholder="Message" required ></textarea>
		<!--recaptcha thing for form-->
		 <div class="g-recaptcha" data-sitekey="6LdsxD4aAAAAAIWbPoSulkJXNVH6py4KRs8on4LR" style="padding-top: 10px; padding-bottom: 10px; display: inline-block"></div>
       <br>
	   <button type="submit" name="submit" style="width: auto">
          SEND MESSAGE
        </button>
      </form>
    </div>
    <!----end of Contact us box-->
    <!---START OF FOOTER-->
	</div>
	<!---end o main class---->
    </div>
    </br>
    <footer id="footer">
      <p>
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.
      </p>
      <p>© 2020 RottenPotatoes</p>
    </footer>
    </div>
    <!---END OF FOOTER-->
  </body>
</html>
