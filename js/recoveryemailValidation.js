document.getElementById("recovery").addEventListener("click", emailValid);
function emailValid(){
    var e = document.forms["myForm"]["mail"].value;
    var email = document.getElementById('email');
    var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    /* test if email input field is empty or not*/
    if (e == ""){
        alert("Email Address field must be filled out");
        return false;
    }

    /* makes sure if value enetred in email input field is in actual email format*/
    else if (!filter.test(email.value)){
        alert("\nPlease provide a valid email address. Example: oinster159@sbcgobal.net");
            return false;
    }
	
	/* submit form */
	else $('#recovery-form').submit();
}