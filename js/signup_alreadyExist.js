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