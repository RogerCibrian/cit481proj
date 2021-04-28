document.getElementById("change_email").addEventListener("click", emailValid);
function emailValid(){
    var email = document.getElementById('email');
    var emailRepeat = document.getElementById('emailRepeat');
    var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!filter.test(email.value) || !filter.test(emailRepeat.value)){
        alert("Please provide a valid email address. Example: oinkster159@sbcglobal.net");
        return false;
    }
}