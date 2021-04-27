
/* email validation is not executed...

contact form still submits message even if value inside
email input field isnt in email format and google reacptcha isnt checked*/

document.getElementById("send_message").addEventListener("click", ValidateContactForm);
function ValidateContactForm(){

		var full_name_field = document.forms["myForm"]["name"].value;
		var email_field = document.forms["myForm"]["email"].value;
		var subject_field = document.forms["myForm"]["subject"].value;
		var message_box_field = document.forms["myForm"]["message"].value;
		var e = document.forms["myForm"]["email"].value;

		if (full_name_field == ""){
			alert("Full Name field must be filled");
			return false;
		}
		if (email_field == ""){
			alert("Emaill Address field must be filled in");
			return false;
		}
		if (subject_field == ""){
			alert("Subject field must be filled in");
			return false;
		}	
		if (message_box_field == ""){
			alert("Message field must be filled out");
			return false;
		}

		/* test if email input field is empty or not*/
		if (e == ""){
			alert("Emaill Address field must be filled out");
			return false;
		}
	
		/* makes sure if value enetred in email input field is in actual email format*/
		var email = document.getElementById('email_addr');
		var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (!filter.test(email.value)){
			alert("\nPlease provide a valid email address. Example: oinster159@sbcgobal.net");
				return false;
		} else{
//			return true;
			$('#contact-form').submit()
		}
}

