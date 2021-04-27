
/*
    When all input fields have value and the information is correct, email 
    address format is correct, BUT if the user's password and re-enter password
    values don't match and the google recaptch is clicked on, the alert message 
    for password match --alert ("\nPassword did not match: Please try again...");---
    does display but the form submits and creates a new account eventho the passwords
    don't match. 

    same error shows even if google recaptch isnt clicked. Alert message says its creating new account
    and automatically signs new user in
*/

document.getElementById("sign-up-button").addEventListener("click", validateForm);

function validateForm(){
    var l = document.forms["myForm"]["username"].value;
    var x = document.forms["myForm"]["fname"].value;
    var j = document.forms["myForm"]["lname"].value;
    var k = document.forms["myForm"]["mailaddr"].value;
    if (l == ""){
        alert("Username field must be filled out");
        return false;
    }
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

    var password1 = document.forms["myForm"]["user_pwd"].value;
    var password2 = document.forms["myForm"]["re_user_pwd"].value;


    if ( password1 == "") {
       alert("Password field must be filled out");
        return false;
   }
   if (password2 == "") {
       alert("Re-Enter Password field must be filled out");
        return false;
   }
   
   if (grecaptcha.getResponse() == ""){
		alert("Complete the reCAPTCHA");
		return false;
	}

    /* makes sure if value enetred in email input field is in actual email format*/
    var email = document.getElementById('email');
    var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!filter.test(email.value)){
        alert("\nPlease provide a valid email address. Example: oinster159@sbcgobal.net");
            return false;
    }

   // Function to check Whether both passwords 
   // are the same or not. 
    if (password1 != password2) { 
       alert ("\nPassword did not match: Please try again..."); 
           return false;
   }else{ 
           /* alert("Password Match: Welcome to RottenPotatoes!") */
//          return true; 
//			document.getElementById("SignUpAccount").submit();
			$('#SignUpAccount').submit();
    }

   
}


