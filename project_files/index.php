<?php include "header.php" ?>
<h3>3.1 Write a simple PHP script to print your information (Name and your groupid).</h3>
    <?php
    echo "Edem Quashigah <br>";
    echo "BBCAP22 <br>";

    ?>
    <h3>3.2 Write PHP code to display the following message.</h3>
    <?php
    echo "Hello World! My name is \"Edem\"";
    ?>

    <h3>3.3 Write the PHP code in to display the current date.</h3>
    <?php
    echo date("m.d.Y");
    ?>
    <h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.
    </h3>

    <h3> 3.4 Variable in Php</h3>
    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>

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

    <h3> 4 Screenshot of the development environment</h3>
    <img src="/ekq_tasks/images/dockerImage.png" alt="image of docker desktop" class="img-fluid">

<?php include "footer.php" ?>