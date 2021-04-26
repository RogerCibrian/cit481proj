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

	<script src='../js/validateSignUp.js'></script>
<!-- Page redirect alerts -->
        <script>
                const queryString = window.location.search;
                const urlPar = new URLSearchParams(queryString);
                const unameExists = urlPar.get('uname');
                const emailExists = urlPar.get('mailaddr');
                const phoneExists = urlPar.get('phone');

                if (unameExists){
                        alert("Username taken, please select another!");
                }
		if (emailExists){
			alert("Email belongs to an account that already exists.");
                }
		if (phoneExists){
                        alert("Phone number belongs to an account that already exists.");
                }
        </script>

	<!-- Google reCAPTCHA API Call -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!---external css file------>
	<link rel="stylesheet" href="../css/sign_up.css"/>
   
  </head>

  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
    <?php
	include 'fullnavbar.php';
    ?>
    <!----end of Navigation Bar-->
    <div id="page-container">
    <div id="content-wrap">
     <div class="main">
    <!-----Start of Sign up page---->
    <div class="Signup_container">
      <h1>Sign up with us!</h1>
      <p>Please fill in this form to become a member!</p>

      <form class="form-signup" name="myForm" id="SignUpAccount" onsubmit="return validateForm()" method="POST" action="signupuser.php">
       <!---<input type="text" name="fname" placeholder="First name" maxlength="30" required />
        <input type="text" name="lname" placeholder="Last name" maxlength="30" required />
        <input type="text" name="username" placeholder="Username" maxlength="20" required />
	<input type="text" name="mailaddr" id="email" placeholder="Your Email Address" maxlength="40" required/>-->
	
	<span class="span1">
		<label for="Username">Username:</label>
		<input id="username" name="username" type="text" maxlength="20" placeholder="Ex: SpottyMilk45" required />
	</span>
	<br>
	<span class="span2">
		<label for="First Name">First Name:</label>
		<input id="fname" name="fname" type="text" maxlength="30" placeholder="Ex: Janette" required />
	</span>
	<span class="span2">
		<label for="Last Name">Last Name:</label>
		<input id="lname" name="lname" tye="text" maxlength="30" placeholder="Ex: Dubbert" required />
	</span>
	<br>
	<!--<span style="float:left" >
		<label for="Username">Username:</label>
		<input id="username" name="username" type="text" maxlength="20" placeholder="Ex: SpottyMilk45" required />
	</span>	--->
	<span class="span2">
		<label for="Emailaddr">Email Address:</label>
		<input id="email" name="mailaddr" type="text" maxlength="40" placeholder="Ex: random98oink@yahoo.com" required />
	</span>
	<!--<br>--->
	<span class="span2">
		<label for="phonenumber">Phone Number:</label>
		<input id="phone" name="phone" type="text" maxlength="12" placeholder="Ex: xxx-xxx-xxxx" required />
	</span>
	<span class="span3">
		<label for="password">Password:</label>
        	<input type="password" name="user_pwd" id="PassInput" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" title="Minimum eight characters, at least one uppercase, at least one lowercase letter, one number, and one special character"  placeholder="Enter Password" required/>
	</span>
	
	<br>
	<span class="span4">
		<label for="re_password">Re-Password:</label>
		<input type="password" name="re_user_pwd" id="PassInput2" placeholder="Re-enter Password" required/>
	</span>	
	

	<label>
		<input class="input_193" type="checkbox" id="showpassword_func">
		<p class="label_p_text"> Show Password </p>
	</label>
	
	<br>
	
	<label class="label_199">
          <input
            type="checkbox"
            checked="checked"
            name="remember"
			class="input_200"/>
          <p class="lable_p_206">Remember me</p>
	</label>
	<br>
	<!--recaptcha thing for form-->
		 <div class="g-recaptcha" data-sitekey="6LdsxD4aAAAAAIWbPoSulkJXNVH6py4KRs8on4LR" ></div>
	
	
	
        <p class="terms_conditions_text">
          By creating an account you agree to our
          <a href="Terms_Privacy.html" class="terms_condition_a"
            >Terms & Privacy</a
          >.
	</p>
	<br>
	
        <div class="clearfix" >
          <button type="cancel"
            onclick="window.location='index.php';return false;"
            class="cancelbtn"
          >
            Cancel
          </button>
          <button
            type="submit"
            name="signup-button"
            class="signup"
          >
            Create Account
          </button>
        </div>
      </form>
    </div>

    </div>
    </div>
    <!---START OF FOOTER-->
    <div class="footer">
      <p>
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.
      </p>
      <p>© 2020 RottenPotatoes</p>
    </div>
    </div>
    <!---END OF FOOTER-->
  </body>
</html>
