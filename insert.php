<!DOCTYPE html>
<html>
<head>
<title>INSERTO PICCOLO@HSV</title>
</head>
<body>
<center>
<?php
    $servername = "localhost";
    $username = "user";
    $password = "password";
    $database_name = "compstreamer";

// Create connection
    $conn = new mysqli($servername, $username, $password, "$database_name");
         
// Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . $conn->connect_error);
    }
         
// Taking all 5 values from the form data(input)
    $fname =  $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $club = $_REQUEST['club'];
    $sex = $_REQUEST['sex'];
    $dob = $_REQUEST['dob'];
    $event = $_REQUEST['event'];


         
// Performing insert query execution
// here our table name is college
    $sql = "INSERT INTO compdata (fname, lname, club, sex, event) VALUES ('$fname','$lname', '$club', '$sex', '$event')"; 
     if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        echo nl2br("\n$fname\n $lname\n "
                . "$club\n $sex\n $event");
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 // Close connection
    mysqli_close($conn);
?>
</center>
<?php include_once 'register.php';?>
</body>
 
</html>
