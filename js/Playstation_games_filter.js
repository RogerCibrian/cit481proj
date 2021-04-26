/*JavaScript filter code */

/*var button1 = document.getElementsByClassName("btn");
button1.addEventListener("click", filterSelection);

var button2 = document.getElementsByClassName("btn2");
button2.addEventListener("click", filterSelection);	

var button3 = document.getElementsByClassName("btn3");
button3.addEventListener("click", filterSelection);*/

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
var button1 = document.getElementById("btn1");
var button2 = document.getElementById("btn2");

var button3 = document.getElementById("btn3");
button3.addEventListener("click", filterSelection);
button3.addEventListener("click", w3AddClass);
button3.addEventListener("click", w3RemoveClass);
button3.addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
});

var button4 = document.getElementById("btn4");


filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
//var btnContainer = document.getElementById("myBtnContainer");
//var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


 