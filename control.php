<?php $title = "Control";
include "header.php"
    
?>
    <div class = "wrapper" style="max-width:80%; margin: auto; background-color:#d4d4d4; padding:20px;">   
    
        <div>
           <?php
            echo "<h3>Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not</h3>";
           $current_date = date('F');
           if($current_date == "August") {
            echo "It's August, so it's still holiday";
               
           } else {
            echo "Not August, this is $current_date so I don't have any holidays";
           }

           echo "<hr> <h3>2.  Assign colour red to a variable name color and check to print one the following responses (if else statement)
           </h3> ";

           $color = "red";
           if($color == "red") {
               echo "The color is red";
           } else {
               echo "The color is not red";
           }

           echo "<hr> <h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. <h3>";
           $totalScore = 90;

           if($totalScore >= 80){
            echo "Excellent";
           } elseif($totalScore >= 70 and $totalScore < 80){
            echo "Great";
            } elseif($totalScore >= 60 and $totalScore < 70){
                echo "Good";
            } elseif($totalScore >= 50 and $totalScore < 60){
                echo "Pass";
            } elseif($totalScore < 50){
                echo "Fail";
            }


           echo "<hr> <h3>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h3>";
           
            
           






            echo "<hr>  <h3>5. Use IF statement with strops function to print the name of the browser as below: 
            If someone is using Chrome it should print, you are using Goolge Chrome….
        </h3>";

                
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
           echo "<br>";
            switch(true){
                    case strpos($user_agent, 'Edg'):
                        echo 'You are using Microsoft Edge.';
                        break;
                    case strpos($user_agent, 'Firefox'):
                        echo 'You are using Mozilla Firefox.';
                        break;
                    case strpos($user_agent, 'Chrome'):
                        echo 'You are using Google Chrome.';
                        break;
                    default:
                        echo 'Your browser could not be determined.';

            }



            /* PHP CODE USING THE IF, ELSEIF STATEMENT

                if(strpos($user_agent, 'edg') == true) {
                echo 'You are using Microsoft Edge.';
                } elseif (strpos($user_agent, 'Firefox') == true) {
                echo 'You are using Mozilla Firefox.';
                } elseif (strpos($user_agent, 'Chrome') == true) {
                echo 'You are using Google Chrome.';
                } else {
                echo 'Your browser could not be determined.';
                } 
                */
            ?>

        </div>
        <div>
            <hr> 
        <br>
<form action="action.php" method="post">
<div class = "row">
    <div class="col">
        <input type="text" name="fname" required placeholder="First Name" class="form-control"> <br>
    
    </div>
    <div class="col">
        <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>
    </div>
</div>
    <div class="row">
        <div class="col">
        Birth Date: <input type="number" name="age" class="form-control"> <br>
        </div>
    </div>
    
    
    <input type="submit" value="Submit1">
</form>
        </div>
    </div>



<?php include "footer.php"?>