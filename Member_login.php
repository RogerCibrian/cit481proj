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
    <script>
	function myFunction(){
		var passwordx1 = document.getElementById("PassInput1");
		if (passwordx1.type === "password"){
			passwordx1.type = "text";
		}else{
			passwordx1.type = "password";
		}
	}
    </script>
    <style>
      input[type="text"],
      select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }
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

      .Memberlogin_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
        height: 450px;
        width: 450px;
        text-align: center;
        margin-left: 30%;
        margin-right: 50%;
        margin-top: 5%;
        margin-bottom: 20%;
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
    <div class="bg"></div>
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
	<input type="checkbox" onclick="myFunction()" style="float: left"><p style="float: left; text-indent: 5px;"> Show Password</p>
        <ol>
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
        <div class="clearfix" style="margin-left: 25px">
          <button
            type="cancel"
            style="width: 150px"
            onclick="window.location='index.php';return false;"
            class="cancelbtn"
          >
            Cancel
          </button>
          <button
            type="submit"
            name="login-submit"
            style="width: 150px"
            class="signup"
          >
            Log In
          </button>
        </div>
      </form>
    </div>
	<!--END OF MEMBER LOG IN FORM-->
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
