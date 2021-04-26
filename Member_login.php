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
    <link rel="stylesheet" href="./css/Member_login.css"/>
  </head>

  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
    <?php
	include 'fullnavbar.php';
    ?>
    <!----end of Navigation Bar-->
     <div id="page-container">
    <div id="content-wrap">
	    
    <div class="bg"></div>
	    
    <div class="main">
    <!--START OF MEMBER LOG IN FORM-->
    <div class="Memberlogin_container">
      <h1>Member Login</h1>
        <?php 
		if (isset($_GET['errormsg'])){
                        $errormsg = $_GET['errormsg'];
			if ($errormsg == "1"){
			echo "<p>Username does not exist!</p>";}
			else
			echo "<p>Incorrect password!</p>";}
		if (isset($_GET['msg'])){
			echo "<p>Password has been updated!</p>";}
	?>
	<form class="form-login" method="POST" action="memberlogin.php">
	<input
          type="text"
          name="username"
          placeholder="Enter username"
          required>
        <input
          type="password"
	  name="pwd"
	  id="PassInput1"
          placeholder="Enter password"
	  required>
	<input type="checkbox" id="show_password" class="button"><p class="button_p"> Show Password</p>
      <br>
      <br>
        <ol>
          <span class="psw" 
            >Forgot <a href="Passwrd_recovery.php">password?</a></span
          >
        </ol>
        <label>
          <input
			class="input_checkbox"
            type="checkbox"
            checked="checked"
            name="remember"
          />
          Remember me
        </label>
        <div class="clearfix">
          <button
			id="cancel_button"
            type="button"
            class="cancelbtn"
            onclick="window.location='index.php';return false;"
          >
            Cancel
          </button>
          <button
            type="submit"
            name="login-submit"
            class="signup"
          >
            Log In
          </button>
        </div>
      </form>
    </div>
	<script src='./js/passwordInput.js'></script>
	    
    </div> 
    </div>
	<!--END OF MEMBER LOG IN FORM-->
    </div>
	    <!---START OF FOOTER-->
    <div class="footer">
      <p>
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.
      </p>
      <p>© 2020 RottenPotatoes</p>
    </div>
    <!---END OF FOOTER-->
  </body>
</html>
