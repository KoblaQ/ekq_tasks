<?php
$title = "Reading Data from the database";
include '../header.php';
include 'db.php';
$sql = "select * from studentinfo"; //add where id equals to 1234 - that is if you want to use the login info. 
$result = $conn->query($sql);
echo "<br>";
if($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Group ID</th></tr>

    ";
    while($row = $result ->fetch_assoc()){
    echo"
    <tr>
        <td><a href='updatesingle.php?id=$row[id]'>$row[id]</td>

        <td>$row[fname]</td>
        <td>$row[lname]</td>
        <td>$row[city]</td>
        <td>$row[groupid]</td>
    </tr>
   
    ";}
    echo "</table>";
} else {
    echo "NO Results";
}
$conn->close();

include '../footer.php';
?>



