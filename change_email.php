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

   <script>
	function ValidateContactForm(){
		var email = document.getElementById('email');
		var emailRepeat = document.getElementById('emailRepeat');
		var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (!filter.test(email.value) || !filter.test(emailRepeat.value)){
			alert("Please provide a valid email address. Example: oinkster159@sbcglobal.net");
			return false;
		}
	}
   </script>

    <style>
      input[type="text"],
      select,
      textarea {
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

      .email_change_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
        /*height: 350px;
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
	<form class="form-login" name="emailForm" onsubmit="return ValidateContactForm()" method="POST" action="update_email_script.php">
	<input type="text" name="email" id="email" placeholder="New Email" required>
	<input type="text" name="email-repeat" id="emailRepeat" placeholder="Repeat New Email" required>
        <div class="clearfix">
		<button type="cancel" style="width: 150px; margin-left: 25px" onclick="window.location='profile_page.php';return false;" class="cancelbtn">Cancel</button>
		<button type="submit" name="reset-email-submit" style="width: 150px" class="signup">Submit</button>
        </div>
      </form>
    </div>
    <!--END OF EMAIL CHANGE FORM-->
  </body>
</html>
