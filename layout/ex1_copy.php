<?php
$title = "Exercise 1";
include "header.php" ?>
    <h1>My simple php script</h1>
    <?php
    //opening tag
    echo "Hello World ! <br>";
    echo "This is a new line <br>";
    echo "I need to use \"back-slash\" to escape special characters <br>";
    echo "Testing if back-slash works with the actual backslash \ ";
    ?>

    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid).</h1>
    <?php
    echo "Edem Quashigah <br>";
    echo "BBCAP22 <br>";

    ?>
    <h1>3.2 Write PHP code to display the following message.</h1>
    <?php
    echo "Hello World! My name is \"Edem\"";
    ?>

    <h1>3.3 Write the PHP code in to display the current date.</h1>
    <?php
    echo date("m.d.Y");
    ?>
    <h1>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h1>

    <?php include "footer.php" ?>