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
    <link rel="stylesheet" href="../css/Passwrd_recovery.css"/>
  </head>

  <body>
	<?php
		/*<!--include 'navbar.php';-->*/
		include 'fullnavbar.php';
	?>
        </ul>
      </div>
    </nav>
    <!----end of Navigation Bar-->
    <!----start of full back background-->
    <div class="bg"></div>
    <!----end of full back background-->
    <!--START OF PASSWORD RECOVERY FORM-->
    <div class="passwrd_recovery_container">
      <h1>Password Recovery</h1>
	  
	<?php
                if (isset($_GET['msg'])){
                        $msg = $_GET['msg'];
                        if ($msg == 'err'){
                        echo "<p>Error: please try again later!</p>";}
                        else
                        echo "<p>Request received! Check your email.</p>";}
		elseif (isset($_GET['limit'])){
			echo "<p>Password reset request expired. <br>Please submit your request again.</p>";}
		else echo "<p>Please enter your email address.</p>";
	?>
	  <br>
      Or<a href="passwrd_recovery_phone.php"> via phone number</a>
      <form
        id="recovery-form"
        class="psswd-recovery-form"
        method="post"
        action="pswd_recovery.php"
        name="myForm"
      >
        <input
          id="email"
          type="text"
          name="mail"
          placeholder="Enter Email Address"
          required
        />
        <div class="clearfix">
          <button
            id="cancel_button"
            type="button"
            class="cancelbtn"
          >
            Cancel
          </button>
          <button type="submit" id="recovery" name="resetrequestsubmit" class="signup"> Recovery </button>
        </div>
      </form>
    </div>
    <!---external JS script: cancel button func and email validation func--->
	  <script type="text/javascript" src='../js/cancel_button.js'></script>
    <script type="text/javascript" src='../js/emailValidation.js'></script>
    <!--END OF PASSWORD RECOVERY FORM-->
  </body>
</html>
