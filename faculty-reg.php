<?php
include 'db_config.php';

$fid = $_POST['fid'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$age = $_POST['age'];

// fid	
// faculty_name	
// date_of_birth	
// contact_number	
// gender	
// age	


$sql = "INSERT INTO `Examination`.`faculty` (`fid`, `faculty_name`, `date_of_birth`, `contact_number`, `gender`, `age`) VALUES ('$fid','$name', '$dob', '$contact', '$gender', '$age');";


if ($conn->query($sql) === TRUE) {
    echo '



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="logstyle.css" />
  </head>
  <body>
    <div class="center">
      <h1>Registration</h1>
      <form action="faculty-login.html" method="post">
        <div class="txt_field" background-colour = "green">
          <h3>Registration Successfull ✅</h3>
        </div>
       
        <input type="submit" value="Go Back" />
       
        </div>
      </form>
    </div>
  </body>
</html>';
} else {
    echo 'Error: ' . $conn->error;
}
$con->close();
?>