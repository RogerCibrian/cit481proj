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
    <script>
	/*$(function () {
		$('#phone').keydown(function(e){
			var key = e.charCode || e.keyCode || 0;
			$text = $(this);
			if (key !== 8 && key !== 9) {
				if($text.val().length === 3){
					$text.val($text.val() + '-');
				}
				if($text.val().length === 7){
					$text.val($text.val() + '-');
				}
			}
			return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <=57) || (key >= 96 && key <= 105));	
		})
	});*/


	function validateForm(){
		var x = document.forms["myForm"]["fname"].value;
		var j = document.forms["myForm"]["lname"].value;
		var l = document.forms["myForm"]["username"].value;
		var k = document.forms["myForm"]["mailaddr"].value;
		var password1 = document.forms["myForm"]["user_pwd"].value;
		var password2 = document.forms["myForm"]["re_user_pwd"].value;


		if (x == ""){
			alert("First Name field must be filled out");
			return false;
		}
		if (j == ""){
			alert("Last Name field must be filled out");
			return false;
		}
		if (l == ""){
			alert("Username field must be filled out");
			return false;
		}
		if (k == ""){
			alert("Emaill Address field must be filled out");
			return false;
		}



		var email = document.getElementById('email');
		var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (!filter.test(email.value)){
			alert("Please provide a valid email address. Example: oinster159@sbcgobal.net");
			return false;
		}
		
		
		/*Password validation part 2*/
              /*checks if password is empty*/
              if ( password1 == "") {
                alert("Password field must be filled out");
                return false;
            }
            else if (password2 == "") {
                alert("Re-Enter Password field must be filled out");
                return false;
            }
            // Function to check Whether both passwords 
            // are the same or not. 
            else if (password1 != password2) { 
                alert ("\nPassword did not match: Please try again..."); 
                return false; 
            }else{ 
//                    alert("Password Match: Welcome to RottenPotatoes!") 
                    return true; 
                }
	}
	
	/*function myFunction(){
		var passwordx2 = document.getElementById("PassInput");
		var passwordx3 = document.getElementById("PassInput2");
		if (passwordx2.type === "password" || passwordx3 === "password"){
			passwordx2.type = "text";
			passwordx3.type = "text";
		}else{
			passwordx2.type = "password";
			passwordx3.type = "password";
		}
	}*/
    </script>

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

	<!----onsubmit="return validateForm()"--->
      <form class="form-signup" name="myForm" id="SignUpAccount"  method="POST" action="signupuser.php">
	
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
	
<!-----onclick="myFunction()"--->
	<label>
		<input class="input_193" id="show_password" type="checkbox" >
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
         <!-- <button type="button" 
            onclick="window.location='index.php';return false;"
            class="cancelbtn"
          >
            Cancel
          </button>--->

		  <button
			id="cancel_button"
            type="button"
            class="cancelbtn"
          > Cancel
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

	<!---external JS script: password visibility and cancel button func--->
	<script src='../js/signup_show_pass.js'></script>

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
