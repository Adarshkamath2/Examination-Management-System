<?php
include 'db_config.php';

$sid = $_POST['sid'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$contact = $_POST['con'];
$gender = $_POST['gender'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$app = $_POST['app'];
$center = $_POST['center'];
$college = $_POST['college'];
$repeater = $_POST['repeater'];

$sql = "Update `Examination`.`student` set name='$name', dob='$dob', contact_number='$contact', gender='$gender', fname='$fname', mname='$mname', application_no='$app',center_id='$center',repeater='$repeater',college='$college' where sid = '$sid'";


if ($conn->query($sql) === TRUE) {
   echo '<!DOCTYPE html>
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
         <form action="student-login.html" method="post">
           <div class="txt_field" background-colour = "green">
             <h3>Update Successfull ✅</h3>
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