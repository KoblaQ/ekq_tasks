// A simple function that triggers alert box
function hello() {
  alert("Welcome to my website");
}

//display or like echo
// document.write
//windows.alert
//innerHTML
// console.log

//a simple function to add 2 numbers
function add() {
  document.write(5 + 6);
}
/*
//function to change the background color of the page
function changeColor(where, newColor) {
  if (where == "background") {
    document.body.style.backgroundColor = newColor;
  }
}
*/

// function to change the background color of the page
function changeColor() {
  //Let's declare a variable with let keyword to get the color from the input box
  // color variable will get the color user selects.
  let color = document.getElementById("background").value;
  document.body.style.backgroundColor = color;
}

function changeFcolor() {
  let fcolor = document.getElementById("fcolor").value;
  document.body.style.color = fcolor;
}

//CRUD
function crud() {
  let fname = document.form1.fname.value.trim();
  let lname = document.form1.lname.value.trim();
  if (fname.length < 5) {
    alert("First Name must have at least 5 character");
    return false;
  }

  if (lname.length >= 15) {
    alert("Last Name must not exceed 15 characters");
    return false;
  }
}

function fname() {
  if (fname.length < 5) {
    alert("First Name must be filled in");
    return false;
  }
}
