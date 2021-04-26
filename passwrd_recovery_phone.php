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
    <link rel="stylesheet" href="../css/Passwrd_recovery_phone.css"/>

  </head>

  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
   
	<?php
		/*include 'navbar.php';*/
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
			elseif ($msg == 'nomatch'){
			echo "<p>The provided phone number is not <br>associated with an account.</p>";}
                        else
                        echo "<p>Request received! Check your phone.</p>";}
		elseif (isset($_GET['limit'])){
			echo "<p>Password reset request expired. <br>Please submit your request again.</p>";}
		else echo "<p>Please enter your phone number.</p>";
	?>
      <br>
      Or<a href="Passwrd_recovery.php"> via email address</a>
      <form
        class="psswd-recovery-form"
        method="post"
        action="txt_pswd_recovery.php"
      >
        <input class="phone" type="text" name="phone" maxlength="12" placeholder="Enter Phone Number" required/>
        <div class="clearfix">
          <button
            id="cancel_button"
            type="button"
            class="cancelbtn"
          >
            Cancel
          </button>
          <button type="submit" name="resetrequestsubmit"  class="signup"> Recovery </button>
        </div>
      </form>
    </div>
    <!---external JS script: cancel button func and phone format func--->
	  <script type="text/javascript" src='../js/cancel_button.js'></script>
    <script type="text/javascript" src='../js/phone_format.js'></script>
    <!--END OF PASSWORD RECOVERY FORM-->
  </body>
</html>