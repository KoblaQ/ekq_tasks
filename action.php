<?php
$title = "Variables";
include "header.php"; 
?>

<div 
class = "wrapper" 
style="max-width:80%; margin: auto; background-color:#d4d4d4; padding:20px;">
    <?php 

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $bdate = $_POST['bdate'];
        $color = $_POST['color'];


        echo "<h3>Your name is $fname $lname </h3>";
        echo "<h3>Your birthday is $bdate </h3>";
        echo "<h3>Your favorite color is $color </h3>";

    echo "<h3>Hello $fname $lname. You are welcome to my site</h3>";
    ?>
    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];

    $name = $fname . " " . $lname;


    if($age >= 18){
        echo "<h1>Congratulations $name!!!, you are eligible for voting</h1>";
    } else {
        echo "<h1>I'm sorry $name, you are not eligible for voting</h1>";
    }
    ?>

</div>

<?php include "footer.php" ?>