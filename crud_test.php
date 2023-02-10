<?php
$title = "A simple CRUD app";
include 'header.php';
?>

<form method="post" action="">
    <input type="text" name="fname" placeholder="First Name" required>
    <input type="text" name="lname" placeholder="Last Name" required>
    <input type="text" name="city" placeholder="City" required>
    <select name="groupid" id="">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Others">Others</option>


    </select>
</form>

<?php
include 'footer.php'
?>