
/* password visibility*/
document.getElementById("show_password").addEventListener("click", myFunction);	
	function myFunction(){
		var passwordx1 = document.getElementById("PassInput1");
		if (passwordx1.type === "password"){
			passwordx1.type = "text";
		}else{
			passwordx1.type = "password";
		}
	}
	

/* cancel button function*/
document.getElementById("cancel_button").addEventListener("click", cancel);	
	function cancel() {
		window.location.href='https://www.rottenpotatoes.org/index.php';
		return false;
	}

	/*onclick="window.location='index.php';return false;"*/