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
	
	<!-- Google reCAPTCHA API Call -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
	$(function () {
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
		});


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
                    alert("Password Match: Welcome to RottenPotatoes!") 
                    return true; 
                }
	}
	
	function myFunction(){
		var passwordx2 = document.getElementById("PassInput");
		var passwordx3 = document.getElementById("PassInput2");
		if (passwordx2.type === "password" || passwordx3 === "password"){
			passwordx2.type = "text";
			passwordx3.type = "text";
		}else{
			passwordx2.type = "password";
			passwordx3.type = "password";
		}
	}
    </script>
    <!---Start of CSS style for sign up form-->
    <style>
    /*input[type="text"],
    input[type="password"],
      select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }

      label {*/
	/*padding: 12px 12px 12px 0;*/
      /*  display: inline-block;
      }*/

	/*attempting to fix how it looks on mobile device*/
	/* Center website */
      .main {
        max-width: 850px;
        margin: auto;
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

      .Signup_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
		   /* height: 750px;
		width: 450px;*/
		/*height: 100%;
		width: 700px;*/
		height: fit-content;
		width:fit-content;
        text-align: center;
       /* margin-left: 30%;
        margin-right: 50%;*/
        margin-top: 5%;
        margin-bottom: 20%;
      }

	#SignUpAccount{
		width: 100%;
		margin: 0 auto;
		padding: 10px 20px 20px 0;
	}
	#SignUpAccount form label{
		float: left;
		display: block;
		padding: 1.0rem 0 0 0;
		font-weight: bold;
	}
	form input#lname, form input#fname,
	form input#username, form input#email,
	form input#phone, form input#PassInput,
	form input#PassInput2{
		width: 100%;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 4px;
	}
	#SignUpAccount span{
		display: inline-block;
		margin: 10px 10px 25px 30px;
		vertical-align: top;
	/*	float: left;*/
	}
	.button{display:block;}
	#SignUpAccount .error{ display:block;}


      /* Responsive layout - when the screen is less than 600px wide, 
      make the two columns stack on top of each other instead of next 
      to each other */
      @media screen and (max-width: 600px) {
        input[type="submit"] {
          width: 100%;
          margin-top: 0;
        }
      }
	  
	  /*editing recaptcha for mobile devices used DevTools to find the div class names*/
	  .rc-anchor-logo-portrait{
		  margin: 0;
		  width: 58px;
	  }
	  .rc-anchor-normal .rc-anchor-pt{
		  margin: 2px 11px 0 0;
		  padding-right: 25px;
		  position: absolute;
		  right: 0;
		  text-align: right;
		  width: 276px;
	  }
	  .rc-anchor-light.rc-anchor-nnormal{
		  border: 1px solid #d3d3d3;
		  width: fit-content;
	  }
    </style>
    <!---End of CSS style for sign form-->
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
	
	<span style="vertical-align:center; margin-left: 35px;width: 270px;">
		<label for="Username">Username:</label>
		<input id="username" name="username" type="text" maxlength="20" placeholder="Ex: SpottyMilk45" required />
	</span>
	<br>
	<span style="margin-left: 35px;width: 270px;">
		<label for="First Name">First Name:</label>
		<input id="fname" name="fname" type="text" maxlength="30" placeholder="Ex: Janette" required />
	</span>
	<span style="margin-left: 35px;width: 270px;">
		<label for="Last Name">Last Name:</label>
		<input id="lname" name="lname" tye="text" maxlength="30" placeholder="Ex: Dubbert" required />
	</span>
	<br>
	<!--<span style="float:left" >
		<label for="Username">Username:</label>
		<input id="username" name="username" type="text" maxlength="20" placeholder="Ex: SpottyMilk45" required />
	</span>	--->
	<span style="margin-left: 35px; width: 270px">
		<label for="Emailaddr">Email Address:</label>
		<input id="email" name="mailaddr" type="text" maxlength="40" placeholder="Ex: random98oink@yahoo.com" required />
	</span>
	<!--<br>--->
	<span style="margin-left: 35px; width: 270px">
		<label for="phonenumber">Phone Number:</label>
		<input id="phone" name="phone" type="text" maxlength="12" placeholder="Ex: xxx-xxx-xxxx" required />
	</span>
	<span style="margin-left: 15%; width: 265px; float: left;">
		<label for="password">Password:</label>
        	<input type="password" name="user_pwd" id="PassInput" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" title="Minimum eight characters, at least one uppercase, at least one lowercase letter, one number, and one special character"  placeholder="Enter Password" required/>
	</span>
	
	<br>
	<span style="width:270px">
		<label for="re_password">Re-Password:</label>
		<input type="password" name="re_user_pwd" id="PassInput2" placeholder="Re-enter Password" required/>
	</span>	
	

	<label /*style="margin-top: -15px"*/>
		<input type="checkbox" onclick="myFunction()" style="float:left;">
		<p style="/*margin-left: 10%; margin-top: -15px;*/margin-top:-1px; float:left; text-indent: 5px"> Show Password </p>
	</label>
	
	<br>
	
	<label style="margin-top -15px;">
          <input
            type="checkbox"
            checked="checked"
            name="remember"
            style="float: left"
          />
          <p style="float: left; text-indent: 5px; margin-top: 3px">Remember me</p>
	</label>
	<br>
	<!--recaptcha thing for form-->
		 <div class="g-recaptcha" data-sitekey="6LdsxD4aAAAAAIWbPoSulkJXNVH6py4KRs8on4LR" style="padding-top: 10px; padding-bottom: 10px; display: inline-block"></div>
	
	
	
        <p style="text-align: center; text-indent: 15px; padding-right: 10px;">
          By creating an account you agree to our
          <a href="Terms_Privacy.html" style="color: dodgerblue"
            >Terms & Privacy</a
          >.
	</p>
	<br>
	
        <div class="clearfix" style="width: auto;">
          <button type="cancel"
            style="width: fit-content;"
            onclick="window.location='index.php';return false;"
            class="cancelbtn"
          >
            Cancel
          </button>
          <button
            type="submit"
            name="signup-button"
            style="width: fit-content; margin-left: 45px"
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
    <div class="footer" style="background-color: black; text-align: center; bottom: 0; left: 0; padding: 4px 6px">
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
