<?php
$title = "Edem Quashigah";
include "header.php" ?>

<div class = "wrapper" style="max-width:80%; margin: auto; background-color:#d4d4d4; padding:20px;">
<h3>3.1 Write a simple PHP script to print your information (Name and your groupid).</h3>
    <?php
    echo "Edem Quashigah <br>";
    echo "BBCAP22 <br>";
    ?>
    <br>
    <h3>3.2 Write PHP code to display the following message.</h3>
    <?php
    echo "Hello World! My name is \"Edem\"";
    ?>
    <br>
    <h3>3.3 Write the PHP code in to display the current date.</h3>
    <?php
    echo date("m.d.Y");
    ?>
    <br>
    <h3> 3.4 Variable in Php</h3>
    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>
    <br>
    <h3>3.5 Table & Variables</h3>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;

    echo "
    <table>
    <tr>
    <th>S.N</th><th>Name</th><th>Grade</th>
    </tr>
    <tr>
    <th>1</th><th>Pekka</th><th>$g1</th>
    </tr>
    <tr>
    <th>2</th><th>Johanna</th><th>$g2</th>
    </tr>
    <tr>
    <th>2</th><th>John</th><th>$g3</th>
    </tr>
    </table>
    ";
    ?>
    <br>
    <h3> 4. Screenshot of the development environment</h3>
    <img src="/ekq_tasks/layout/dockerImage.png" alt="image of docker desktop" class="img-fluid">
</div>

<br>
     <script>
          document.write("Hello world this is JavaScript");
     </script>

     <noscript>
          Please enable JavaScript to view this content.
     </noscript>

     <input type="button" onclick="hello()" value="Click Me">
     <br>
     <input type="button" onclick="add()" value="Click to add">
     <hr>
     <p id="place1" style = "color:red; background-color : yellow"> </p>
     <span id="place2" style="background-color:blue;"> </span>
     <script>
        //window.alert
        //window.alert("This will trigger an alert box");
        //window.alert(5+10);
        //document.write
        //document.write("Hello this is interesting");
        
        document.getElementById("place1").innerHTML = "This will go to place1";
        document.getElementById("place2").innerHTML = "This will go to span";
     </script>
    <hr>
     <h2> Changing Background Color</h2>
     <form action="">
        <input type="color" name="background" onchange="changeColor('background', this.value)">
     </form>

     <hr>
     <form method="post" action="" onsubmit="return crud()" name="form1">
    <input type="text" name="fname" placeholder="First Name" required onblur="fname()"><br><br>
    <input type="text" name="lname" placeholder="Last Name" required><br><br>
    <input type="text" name="city" placeholder="City" required><br><br>
    <select name="groupid" id="">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Others">Others</option>


    </select><br><br>
    <input type="submit" value="Submit" name="submit" id="">
</form>
     

    
     

<?php include "footer.php" ?>