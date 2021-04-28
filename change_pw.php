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
    <link rel="stylesheet" href="../css/change_pw.css"/>
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
    <!--START OF PASSWORD RECOVERY FORM-->
    <div class="passwrd_recovery_container">

<!-- start of php code -->
      <h1>Change Password</h1>
	<?php
		if(!isset($_SESSION['loggedin'])){
                                header("Location: index.php");
                                exit();}
		 if (isset($_GET['errmsg'])){
                        $msg = $_GET['errmsg'];
                        if ($msg == 'empty'){
                        echo "<p>Please fill in both fields.</p>";}
			else if ($msg == 'crntpassnomatch'){
			echo "<p>Current password is incorrect. Please try again.</p>";}
                        else
                        echo "<p>New passwords do not match. Please try again.</p>";}
//		else echo "<p>Please enter a new password.</p>";
	?>
	<form class="form-login" method="POST" action="update_pwd_script.php">
	<input type="password" name="cur-pwd" placeholder="Current Password" required>
	<input type="password" name="pwd" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" title="Minimum eight characters, at least one uppercase, at least one lowercase letter, one number, and one special character" placeholder="New Password" required>
	<input type="password" name="pwd-repeat" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" title="Minimum eight characters, at least one uppercase, at least one lowercase letter, one number, and one special character" placeholder="Repeat New Password" required>
        <div class="clearfix" id="clearfix">
		<button type="cancel" id="profile_cancel_button" class="cancelbtn">Cancel</button>
		<button type="submit" name="reset-password-submit" id="submit" class="signup">Submit</button>
        </div>
      </form>
    </div>
    <!--END OF PASSWORD RECOVERY FORM-->
    	<!---external JS script:  cancel button func--->
	    <script type="text/javascript" src='../js/profile_cancel_button.js'></script>
  </body>
</html>
