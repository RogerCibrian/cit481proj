/* phone number format*/
$(function () {
    $('#phone').keydown(function(e){
        var key = e.charCode || e.keyCode || 0;
        var $text = $(this);
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


/* password visibility*/
document.getElementById("show_password").addEventListener("click", myFunction);	
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

/* cancel button function*/
document.getElementById("cancel_button").addEventListener("click", cancel);	
	function cancel() {
		window.location.href='https://www.rottenpotatoes.org/index.php';
		return false;
	}