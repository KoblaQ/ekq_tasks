<?php
$title = "Update your info";
include '../header.php';
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn, "Select * from studentinfo where id='$a' "  );
$row = mysqli_fetch_array($result);


?>

<div class = "wrapper" style="max-width:80%; margin: auto; background-color:#d4d4d4; padding:20px;">
<h2>Update your information bellow</h2>

<form name = "update" method="post" action="">
    <input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname']; ?>"><br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname']; ?>"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']; ?>"><br><br>
    <select name="groupid" id="">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Others">Others</option>


    </select><br><br>
    <input type="submit" value="Update Your Information" name="update" id="">
    <input type="submit" value="Delete Your Information" name="delete" id="">
</form>
</div>

<?php
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];

        $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname',
        lname='$lname', city='$city', groupid='$groupid' WHERE id ='$a' ");

        if($query){
            echo "<h2>Your information has been updated successfully</h2>";
        } else {
            echo"Record Not Modified";
        }


    }
?>

<?php
    if(isset($_POST['delete'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];

        $query = mysqli_query($conn, "DELETE FROM studentinfo WHERE id='$a'");

        if($query){
            echo "<h2>Your information has been deleted successfully</h2>";
        } else {
            echo"<h2>Record Not Deleted</h2>";
        }
    }
?>