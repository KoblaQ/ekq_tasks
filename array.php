<?php $title = "Arrays";
include "header.php"; ?>

<div class = "wrapper" style="max-width:80%; margin: auto; background-color:#d4d4d4; padding:20px;">
<div>
    <hr> <h3>Write a php script to display courses as list. Use &#60;li&#62;
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h3>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

for ($i = 0; $i < (count($courses)); $i++){
    echo $courses[$i] . "<br>";
}
?>

</div>

<div>
    <hr> <h3>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h3>
<?php
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
var_dump($courses1);
unset($courses1[2]);
echo "<br> Javascript has been removed from the list using the unset function <br>";
echo "<br>";
for ($i = 0; $i < (count($courses)); $i++){
    echo $courses[$i] . "<br>";
}
?>

</div>

<div>
    <hr> <h3>3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

    
</h3>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    echo "<h4>a. ascending order sort by value</h4><br>";
    sort($courses3);
    for ($i = 0; $i < (count($courses3)); $i++){
        echo $courses3[$i] . "<br>";
    }

    echo "<br> <h4>b. ascending order sort by Key</h4> <br>";
    var_dump($courses3);
    echo "<br>";
    $courseskey=array("y" => "PHP", "s" => "HTML", "k" => "JavaScript", "u" => "CMS", "p" => "Project");
    var_dump($courseskey);
    echo "<br>";
    ksort($courseskey);
    
    foreach($courseskey as $key => $value){
    echo "$key = $value <br>";
    }

    echo "<br><h4>c. descending order sort by Value</h4><br>";
    var_dump($courses3);
    echo "<br>";
    rsort($courses3);
    echo "<br>";
    for ($i = 0; $i < (count($courses)); $i++){
        echo $courses[$i] . "<br>";
    }

    echo "<br><h4><h4>d. descending order sort by Key</h4><br>";
    echo "<br>";
    var_dump($courseskey);
    echo "<br>";
    $courseskey=array("y" => "PHP", "s" => "HTML", "k" => "JavaScript", "u" => "CMS", "p" => "Project");
    krsort($courseskey);
    echo "<br>";
    
    foreach($courseskey as $key => $value){
    echo "$key = $value <br>";
    }


?>

</div>

<div>
    <hr> <h3>4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
</h3>
<?php

?>

</div>

<div>
    <hr> <h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3>
<?php

?>

</div>

<div>
    <hr> <h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h3>
<?php

?>

</div>

<div>
    <hr> <h3>7. </h3>
<?php

?>

</div>

<div>
    <hr> <h3>In Class Calculator</h3>
    <form action="" method="get">
        <input type="number" step = "any" placeholder="Enter first number" name="num1" required>
        <input type="number" step = "any" placeholder="Enter second number" name="num2" required>
        <select name="operator" id="">
            <option value="add" >Add</option>
            <option value="sub" >Subtract</option>
            <option value="multiply" >Multiply</option>
            <option value="divide" >Divide</option>
        </select>
        <input type="submit" name ="cal" value = "calculate">

    </form>
    <?php 
        if(isset($_GET["cal"])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];

            switch($operator){
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "sub":
                    $result = $num1 - $num2;
                    break;
                case "multiply" : 
                    $result = $num1 * $num2;
                    break;
                case "divide" : 
                    $result = $num1 / $num2;
                    break;
                default:
                    $result = "Error: You have not selected the correct operator";


            }
        }

        if(isset($result)){
        echo "<h2>Result: $result</h2>";
        }

    ?>

</div>
</div>




<?php include "footer.php"; ?>