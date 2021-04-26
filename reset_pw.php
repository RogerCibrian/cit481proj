<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>
    <link rel="stylesheet" href="/main.css" />
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

    <!---external css file----------->
    <link rel="stylesheet" href="../css/reset_pw.css"/>
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
	<?php
	$selector = $_GET["selector"];
	$validator = $_GET["validator"];

	if (empty($selector) || empty($validator)){
	echo "Couldn't validate your request.";
	} else {
/*check for hexadecimal selector and validator*/
	if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ){
	?>

      <h1>Reset Password</h1>
	<?php
		 if (isset($_GET['errmsg'])){
                        $msg = $_GET['errmsg'];
                        if ($msg == 'empty'){
                        echo "<p>Please fill in both fields.</p>";}
                        else
                        echo "<p>Passwords did not match. Please try again.</p>";}
		else echo "<p>Please enter a new password.</p>";
	?>
	<form class="form-login" method="POST" action="newpass.php">
        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
	<input type="hidden" name="validator" value="<?php echo $validator; ?>">
	<input type="password" name="pwd" placeholder="New Password" required>
	<input type="password" name="pwd-repeat" placeholder="Repeat New Password" required>
        <div class="clearfix">
          <button type="submit" name="reset-password-submit" class="signup"> Reset Password </button>
        </div>
      </form>
	<?php
	}
	}
	?>
    </div>
    <!--END OF PASSWORD RECOVERY FORM-->
  </body>
</html>
