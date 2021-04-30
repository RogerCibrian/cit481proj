
var count;

function starmark(item) {
  count = item.id[0];
  //sessionStorage.starRating = count;
  var subid = item.id.substring(1);
  for (var i = 0; i < 5; i++) {
    if (i < count) {
      document.getElementById(i + 1 + subid).style.color = "orange";
    } else {
      document.getElementById(i + 1 + subid).style.color = "black";
    }
  }
}
//i think this is jquery
//function finalrating(item) {
//var count = item.id[0];
//$.post("../user_rating_form.php", {rating:count});
 
/*Timestamp javascript code */
 var dt = new Date();
document.getElementById("datetime").innerHTML =
  ("0" + (dt.getMonth() + 1)).slice(-2) +
  "/" +
  ("0" + dt.getDate()).slice(-2) +
  "/" +
  dt.getFullYear() +
  " " +
 dt.toLocaleTimeString();
/*
function result() {
  //Rating : Count
  //Review : Comment(id)
  alert(
    "Rating : " +
      count +
      "\nReview : " +
      document.getElementById("comment").value
  );
}*/
/*
function openForm($id) {
document.getElementById($id).style.display = "block";
}
function closeForm($id) {
document.getElementById($id).style.display = "none";
} */
//likes section 
var lArray = $("#myPhpValue").val();
// pass php array to javascript array in json format
//var lArray = <?php echo json_encode($userLikes) ?>;
//grab the parent element which comments are a part of
const parent = document.getElementById('pComments');
var countn = 0;
//save all clicks a user does before refreshing the page

//add event listener to parent, any event in children element events will bubble up to this element
var arrayClicks = [];
parent.addEventListener('click', event => {
 // console.log(event.target.firstchild.className);
    if (event.target.className === 'thum fa_thumbs_up'){
    //get the date associated with the liked event
    //get the <h> tag to add to the count summary of the liked event
    let str2 = event.target.parentElement.nextElementSibling;
    // date associated with event
    let str3 = event.target.parentElement.parentElement.parentElement.firstElementChild.innerHTML;
    //start at the closing character of the first span tag
    str3 = str3.substring(str3.indexOf(">") + 2);
    //start at 0 index and end at opening character of the closing span tag
    str3 = str3.substring(0, str3.indexOf('<'));
    // for loop check if user already liked on that date
    for (let i = 0; i < lArray.length; i++){
     let a = lArray[i].date;
     //let b = lArray[i]["COUNT(likesvalue)"];
     let c = lArray[i]["COUNT(dislikevalue)"];
     let dt1 = str3.trim();
      if (dt1 === a){
       countn = 1;
      }
    }
    if (countn === 0 && arrayClicks.indexOf(str3.trim()) == -1){
      //add 1 to the counter
          arrayClicks.push(str3.trim());
      //  console.log(arrayClicks[0]);
      let e = 1;
      let d = Number(str2.innerHTML);
      if (Number.isFinite(d)){
      let f = e+d;
      str2.innerHTML = f;
      } else {
      str2.innerHTML = e;
      }

      //console.log(e);
     } else{
       countn = 0;
     }
  }
  else if (event.target.className === 'thum fa_thumbs_down'){
    //get the date associated with the liked event
    let str3 = event.target.parentElement.parentElement.parentElement.firstElementChild.innerHTML;
    console.log(str3);
    //get the <h> tag to add to the count summary of the liked event
    let str2 = event.target.parentElement.nextElementSibling;
    console.log(str2);
    //start at the closing character of the first span tag
    str3 = str3.substring(str3.indexOf(">") + 2);
    //start at 0 index and end at opening character of the closing span tag
    str3 = str3.substring(0, str3.indexOf('<'));
    // for loop check if user already liked on that date
    for (let i = 0; i < lArray.length; i++){
     let a = lArray[i].date;
     let b = lArray[i]["COUNT(likesvalue)"];
     //let c = lArray[i]["COUNT(dislikevalue)"];
     let dt1 = str3.trim();
      if (dt1 === a){
       countn = 1;
      }
    }
    if (countn === 0 && arrayClicks.indexOf(str3.trim()) == -1){
      //put date into array
      arrayClicks.push(str3.trim());
      //add 1 to the counter
      let e = 1;
      let d = Number(str2.innerHTML);
      if (Number.isFinite(d)){
      let f = e+d;
      str2.innerHTML = f;
      } else {
      str2.innerHTML = e;
      }
      //console.log(e);
     } else{
       countn = 0;
     }
  }
});          
// open reply form for comments
parent.addEventListener('click', event => {
  if (event.target.className === "open-button"){
    let i_d = event.target.nextSibling.nextSibling.id;
    console.log(i_d); 
    document.getElementById(i_d).style.display = "block";
  }
  console.log(event.target.id);
  if (event.target.id === "button2"){
console.log(event.target.parentElement.parentElement.id);
    let i_d2 = event.target.parentElement.parentElement.id;
    document.getElementById(i_d2).style.display = "none";
  }
});

$('.userrating-form').submit(function(e){
e.preventDefault();
  $.ajax({
      url     : $(this).attr('action'),
      type    : $(this).attr('method'),
      data    : $(this).serialize(),
      success : function() {
  if(!alert('Thanks for your comment!')){window.location.reload();}
      //alert("Thanks for your comment");
  }
});

});

// same function as above for reply section
$('.form-container').submit(function(e){
e.preventDefault();
  $.ajax({
      url     : $(this).attr('action'),
      type    : $(this).attr('method'),
      data    : $(this).serialize(),
      success : function() {
  if(!alert('Thanks for your comment!')){window.location.reload();}
      //alert("Thanks for your comment");
  }
});

});

// likes click events stop submit with ajax call
$('.likesContainer').submit(function(e){
e.preventDefault();
  $.ajax({
      url     : $(this).attr('action'),
      type    : $(this).attr('method'),
      data    : $(this).serialize()
     /* success : function() {
       alert('liked!');
      //alert("Thanks for your comment");
  }*/
});

});
$('.dislikesContainer').submit(function(e){
e.preventDefault();
  $.ajax({
      url     : $(this).attr('action'),
      type    : $(this).attr('method'),
      data    : $(this).serialize()
      /*success : function() {
       alert('didnt like it!');
  }*/
});

});

