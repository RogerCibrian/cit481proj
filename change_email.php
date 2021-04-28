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

      <!-------css edits in external css link----->
      <link rel="stylesheet" href="../css/change_email.css"/>
  </head>

  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
         <?php
 	  include 'fullnavbar.php';
	 ?>
    <!----end of Navigation Bar-->
    <!----start of full back background-->
    <div class="bg"></div>
    <!----end of full back background-->
	<div id="page-container">
	<div id="content-wrap">
    <!--START OF EMAIL CHANGE FORM-->
    <div class="email_change_container">

<!-- start of php code -->
      <h1>Change Email</h1>
	<?php
		if(!isset($_SESSION['loggedin'])){
                                header("Location: index.php");
                                exit();}
		 if (isset($_GET['errmsg'])){
                        $msg = $_GET['errmsg'];
                        if ($msg == 'empty'){
                        echo "<p>Please fill in both fields.</p>";}
			else echo "<p>Email fields do not match. Please try again.</p>";}
		else echo "<p>Please enter your email address.</p>";
	?>
	<form class="form-login" name="emailForm" id="change_email" method="POST" action="update_email_script.php">
	<input type="text" name="email" id="email" placeholder="New Email" required>
	<input type="text" name="email-repeat" id="emailRepeat" placeholder="Repeat New Email" required>
        <div class="clearfix">
		<button type="cancel" id="profile_cancel_button" class="cancelbtn">Cancel</button>
		<button type="submit" id="sign-up-button" name="reset-email-submit" class="signup">Submit</button>
        </div>
      </form>
	  </div>
	  </div>
	  <footer id="footer">
      <p>
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.
      </p>
      <p>© 2020 RottenPotatoes</p>
    </footer>
    <!---END OF FOOTER-->
    	<!---external JS script:  cancel button func--->
	    <script type="text/javascript" src='../js/profile_cancel_button.js'></script>
      <script type="text/javascript" src='../js/emailValidation.js'></script>
    <!--END OF EMAIL CHANGE FORM-->
	</div>
  </body>
</html>
