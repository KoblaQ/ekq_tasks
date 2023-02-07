<?php
$title = "Variables";
include "header.php" ?>

<div class = "wrapper" style="max-width:80%; margin: auto; background-color:#d4d4d4; padding:20px;">
<h3>Exercise 3. In-class Task Variable & Operators (variable.php)</h3>
<br>
<h2>
1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using h3 tag: Hello …., You are welcome to my site.
</h2>
<br>
<h3>Apply bootstrap style to the form.</h3>

<br>
<form action="action.php" method="post">
<div class = "row">
    <div class="col">
        <input type="text" name="fname" required placeholder="First Name" class="form-control"> <br>
    
    </div>
    <div class="col">
        <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>
    </div>
</div>
    <div class="row">
        <div class="col">
        Birth Date: <input type="date" name="bdate" class="form-control"> <br>
        </div>
        <div class="col">
        Select fav Color: <input type="color" name="color" class="form-control"> <br>
        </div>

    </div>
    
    
    <input type="submit" value="Submit">
</form>

<br>


<div>
    <h3>3.  Prepare a simple html table and apply bootstrap style to the table.</h3>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pekka</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Johanna</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
</div>

<?php
echo "
Old table from exercise 1 3.5 without the bootstrap modifications.
    <table class=\" table-bordered\">
    <tr>
    <th>S.N</th><th>Name</th><th>Grade</th>
    </tr>
    <tr>
    <th>1</th><th>Pekka</th><th>5</th>
    </tr>
    <tr>
    <th>2</th><th>Johanna</th><th>4</th>
    </tr>
    <tr>
    <th>2</th><th>John</th><th>5</th>
    </tr>
    </table>
    ";
    ?>

<div>
    <br>
    <h3>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h3>
    <br>
    <?php
    $string1 = "Edem";
    $string2 = "Quashigah";
    
    echo " <br> The length of " . $string1 . " and " . $string2 . " together is " . strlen($string1) + strlen($string2);
    ?>
</div>

<div>
    <br>
    <h3>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h3>
    <br>
    <?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;

    $total = $num1 + $num2 + $num3;

    echo " <br> The total of" . " " .  $num1 . " " . $num2 . " and " .  $num3 . " is " . $total ;
    ?>
</div>

<div>
    <br>
    <h3>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). </h3>
    <br>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    ?>
</div>

<div>
    <br>
    <h3>Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. (Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time)</h3>
    <br>
    <?php
        
    ?>
</div>

</div>





<?php include "footer.php" ?>