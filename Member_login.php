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
    <script src='./js/passwordInput.js'></script>
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
	<input type="checkbox" onclick="myFunction()" style="float:left"><p style="float:left; text-indent: 5px;"> Show Password</p>
      <br>
      <br>
        <ol style="text-indent: -55px">
          <span class="psw" style="margin-right: 40px"
            >Forgot <a href="Passwrd_recovery.php">password?</a></span
          >
        </ol>
        <label>
          <input
            type="checkbox"
            checked="checked"
            name="remember"
            style="margin-bottom: 15px; margin-top: -20px;"
          />
          Remember me
        </label>
        <div class="clearfix" style=" width: auto; margin-left: 25px">
          <button
            type="cancel"
            style="width: fit-content"
            onclick="window.location='index.php';return false;"
            class="cancelbtn"
          >
            Cancel
          </button>
          <button
            type="submit"
            name="login-submit"
            style="width: fit-content; margin-left: 45px;"
            class="signup"
          >
            Log In
          </button>
        </div>
      </form>
    </div>
	    
    </div> 
    </div>
	<!--END OF MEMBER LOG IN FORM-->
    </div>
	    <!---START OF FOOTER-->
    <div class="footer" style="background-color:black; padding: 4px 6px; text-align:center; bottom:0; left:0">
      <p>
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.
      </p>
      <p>© 2020 RottenPotatoes</p>
    </div>
    <!---END OF FOOTER-->
  </body>
</html>
