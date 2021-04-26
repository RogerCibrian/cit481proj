document.getElementById("email").addEventListener("click", validateEmail);
var password1 = document.forms["myForm"]["user_pwd"].value;
var password2 = document.forms["myForm"]["re_user_pwd"].value;
function validateEmail(){
     /* makes sure if value enetred in email input field is in actual email format*/
     var email = document.getElementById('email');
     var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     if (!filter.test(email.value)){
         alert("Please provide a valid email address. Example: oinster159@sbcgobal.net");
         return false;
     }

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
            /* alert("Password Match: Welcome to RottenPotatoes!") */
            return true; 
        }
}