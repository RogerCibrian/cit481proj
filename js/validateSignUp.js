
document.getElementById("SignUpAccount").addEventListener("click", validateForm);
function validateForm(){
    var l = document.forms["myForm"]["username"].value;
    var x = document.forms["myForm"]["fname"].value;
    var j = document.forms["myForm"]["lname"].value;
    var k = document.forms["myForm"]["mailaddr"].value;
    var password1 = document.forms["myForm"]["user_pwd"].value;
    var password2 = document.forms["myForm"]["re_user_pwd"].value;

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


    /* makes sure if value enetred in email input field is in actual email format*/
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
                /* alert("Password Match: Welcome to RottenPotatoes!") */
                return true; 
            }
}



/*******************************
*
*   if username, email address, 
    and/or phone number  already 
    registered then
    do this
*
*******************************/

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