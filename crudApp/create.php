<?php
$title = "A simple CRUD app";
include '../header.php';
?>
<div class = "wrapper" style="max-width:80%; margin: auto; background-color:#d4d4d4; padding:20px;">

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
</div>


<?php
if(isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include 'db.php';
    $sql = "insert into studentinfo (fname, lname, city, groupid)
    values('$fname','$lname', '$city', '$groupid')" ;

    if($conn->query($sql) === TRUE){
        echo "Your information has been added successfully";
    } else {
        echo "Error: " . $conn->error;
    }

}

?>



<?php
include '../footer.php'
?>