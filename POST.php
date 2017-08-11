<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 8/4/17
 * Time: 10:41 AM
 * 
 * GIT HUB
 * https://github.com/messmoJMU/TeamEvaluation.git
 */

// Login credentials
$username = "root";
$password = "Cis813401";
$dbname = "mysql";

//POST variables
$progName = $_POST['progName'];
$email = $_POST['email'];
$spid = $_POST['spid'];

// Attribute scores
$alignmentScore=0;
$contextScore=0;
$learningScore=0;
$lifecycleScore=0;
$organizationScore=0;
$processScore=0;
$totalScore=0;


// Create connection
$conn = new mysqli('localhost:3306', $username, $password, $dbname) or die("Unable to connect");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

// Check if checkboxes are checked in HTML
// ALIGNTMENT
for($i=1;$i<=8;$i++){
    if (isset($_POST[$i])){
        $alignmentScore+=1;
    }
}

// CONTEXT
for($i=9;$i<=16;$i++){
    if (isset($_POST[$i])){
        $contextScore+=1;  
    }
}

// LEARNING
for($i=17;$i<=23;$i++){
    if (isset($_POST[$i])){
        $learningScore+=1;  
    }
}

// LIFECYCLE
for($i=24;$i<=31;$i++){
    if (isset($_POST[$i])){
        $lifecycleScore+=1;  
    }
}

// ORGANIZATION
for($i=32;$i<=39;$i++){
    if (isset($_POST[$i])){
        $organizationScore+=1;  
    }
}

// PROCESS
for($i=40;$i<=48;$i++){
    if (isset($_POST[$i])){
        $processScore+=1;  
    }
}

// Calculate TOTAL SCORE
$totalScore=$alignmentScore+$contextScore+$learningScore
        +$lifecycleScore+$organizationScore+$processScore;


// Print SUMMARY of results
echo'<center><p><img src = "https://steveblank.files.wordpress.com/2016/08/nga.png"  style="width:90px;height:90px";/>';
echo '<strong><center>Congratulations, you have completed the DEVOPS checklist.</center></strong>'.
    '<strong>  <center>Your score is below. Remember a higher score does not</center></strong>'.
    '<strong><center>necessarily indicate a better score.</center></strong>'.'<br>';
echo "<p></p><center>Your Score!</center></p>";
echo "<p></p><strong><center>".$totalScore."</center></strong></p>";
echo "<p></p><center>______________________</center></p>";
echo "<p></p><center>"."Alignment Score: ".$alignmentScore."</center></p>";
echo "<p></p><center>"."Context Score: ".$contextScore."</center></p>";
echo "<p></p><center>"."Learning Score: ".$learningScore."</center></p>";
echo "<p></p><center>"."Lifecycle Score: ".$lifecycleScore."</center></p>";
echo "<p></p><center>"."Organization Score: ".$organizationScore."</center></p>";
echo "<p></p><center>"."Process Score: ".$processScore."</center></p>";
echo "<p></p><center>______________________</center></p>";


// INSERT for MySQL
$sql = "INSERT INTO Team_Data (spid,team_name,email,alignment,context,learning,
    lifecycle,organization,processes,total)
VALUES"."("."'".$spid."'".","."'".$progName."'".","."'".$email."'".","
        .$alignmentScore.",".$contextScore.",".$learningScore.","
        .$lifecycleScore.",".$organizationScore.",".$processScore.","
        .$totalScore.");";

// Attempt to use PHP to send EMAILS w/ results -- issues doing this from Mac
//$msg = "Hello this is a test!";
//$msg = wordwrap($msg,70);
//
//mail("landon.messmer@aol.com", "Test email!", $msg);

// Notification of EMAIL RESULTS
if ($conn->query($sql) === TRUE) {
    echo "<p><center>Thank You! You will receive an email shortly with"
        ."<center>your results.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>