<?php
include 'db_config.php';

$sid = $_POST['sid'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$contact = $_POST['con'];
$gender = $_POST['gender'];
$age = $_POST['age'];

// fid	
// faculty_name	
// date_of_birth	
// contact_number	
// gender	
// age	


$sql = "Update `faculty` set faculty_name='$name', date_of_birth='$dob', contact_number='$contact', gender='$gender', age='$age' where fid = $sid;";


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