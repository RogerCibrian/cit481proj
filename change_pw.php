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
    <style>
      input[type="password"],
      select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }

      label {
        padding: 12px 12px 12px 0;
        display: inline-block;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      .passwrd_recovery_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
        /*height: 450px;
        width: 450px;*/
		height: fit-content;
		width: fit-content;
        text-align: center;
        /*margin-left: 30%;
        margin-right: 50%;
        margin-top: 5%;
        margin-bottom: 20%;*/
		margin: 0 auto;
      }

      /* Responsive layout - when the screen is less than 600px wide, 
      make the two columns stack on top of each other instead of next 
      to each other */
      @media screen and (max-width: 600px) {
        input[type="submit"] {
          width: 100%;
          margin-top: 0;
        }
      }
    </style>
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
        <div class="clearfix" style="margin-left: 25px;">
		<button type="cancel" style="width: 150px" onclick="window.location='profile_page.php';return false;" class="cancelbtn">Cancel</button>
		<button type="submit" name="reset-password-submit" style="width: 150px" class="signup">Submit</button>
        </div>
      </form>
    </div>
    <!--END OF PASSWORD RECOVERY FORM-->
  </body>
</html>
