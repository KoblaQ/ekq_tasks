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
    $courses4=array("php", "html", "javascript", "cms", "project");
    for ($i = 0; $i < (count($courses4)); $i++){
        $coursesUpper = strtoupper($courses4[$i]);
        echo $coursesUpper . "<br>";
    }
?>

</div>

<div>
    <hr> <h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h3>
<?php
$favColors = array("#880808" => "Blood Red", "#FFBF00" => "Amber", "#7FFFD4" => "Aquamarine", "	#F0FFFF" => "Azure", "	#E6E6FA" => "Lavender");
    foreach($favColors as $hex => $colorName){
        echo "<br>The hexadecimal for $colorName is $hex";
    }
?>

</div>

<div>
    <hr> <h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h3>
<?php

$temps = array(78, 60, 62, 68, 71, 68, 73,
85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);
$total = count($temps);
echo $total;
echo count($temps);
echo count($temps);


echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
echo "The <strong>explode</strong> function seperates the values of a string by the selected/ defined seperator parameter and then records and returns
each of the remaining seperated string words into an array value. <br> Fortunately for the php language, we don't need to parse 
the value type into a string or a number. <br><br>";
print_r($month_temp);
echo "<br>";

$temp_array = explode(',', $month_temp);
print_r($temp_array);
$tot_temp = 0;
// What is count? 
echo "<br>The <strong>count</strong> function in this case counts and returns all the elements in an array. <br> 
Knowing the count helps for example to easily print the values of the array through a loop. Bellow is the average of the temperatures.<br><br>";
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
echo "<br> The <strong>sort</strong> function sorts the values of an array. This function by default sorts the values of the array in ascending order. asort does the same.  
There are many types of sort functions like rsort that sorts the values of the array in descending order.";
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

echo "<br><br> This is a <strong>for loop</strong>. This for-loop first uses \$temp_array_length variable which is essentially the total number of values in the array.
With this method, it is important to note that the array has already been sorted by ascending order. This loop is now attempting to print out the last 5 values (the 5 highest values)
For each value of the array starting from the 5th last value until the last value, it prints out that value and a comma";
?>

</div>

<div>
    <hr> <h3>7. In Class Calculator</h3>
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