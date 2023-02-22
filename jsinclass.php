<?php
$title = "JavaScript Events and form validations";
include "header.php";
?>
<br>
<h2>A simple button to display date</h2>
<button onclick="this.innerHTML = Date()">Click to know date </button>
<hr>
<h2>Make a button and a place holder as a paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML=Date()">Click to know date</button>
<p id="p1"></p>



<hr>
<h2>Change the background color</h2>
<form>
    <input type="color" id="background" onchange="changeColor()">
</form>



<hr>
<h2>Change the Font color</h2>
<form>
    <input type="color" id="fcolor" onchange="changeFcolor()">
</form>


<hr>
<h2>On Mouse Over & On Mouse Out</h2>
<span onmouseover="this.style.color='blue'; 
    this.style.backgroundColor = 'yellow';
    this.style.fontSize = '2em';"
    onmouseout="this.style.color='red'; 
    this.style.backgroundColor = 'green';
    this.style.fontSize = '1.1em';"
    >
     Some Text

</span>






<?php include "footer.php"?>