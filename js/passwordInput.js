document.getElementById("show_password").addEventListener("click", myFunction);	
	function myFunction(){
		var passwordx1 = document.getElementById("PassInput1");
		if (passwordx1.type === "password"){
			passwordx1.type = "text";
		}else{
			passwordx1.type = "password";
		}
	}
	
document.getElementById("cancel_button").addEventListener("click", cancel);	
	function cancel() {
		onclick="window.location.href='index.php';"
	}