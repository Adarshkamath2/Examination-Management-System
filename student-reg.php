<?php
include 'db_config.php';

$sid = $_POST['sid'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$app = $_POST['app'];
$center = $_POST['center'];
$repeater = $_POST['repeater'];
$college = $_POST['college'];

$sql = "INSERT INTO `Examination`.`student` (`sid`, `name`, `dob`, `contact_number`, `gender`, `fname`, `mname`, `application_no`,`center_id`,`repeater`,`college`) VALUES ('$sid','$name', '$dob', '$contact', '$gender', '$fname','$mname','$app','$center','$repeater','$college');";


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
      <form action="student-login.html" method="post">
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
      <form action="student-reg.html" method="post">
        <div class="txt_field" background-colour = "green">
          <h3>Registration Not Valid ❌</h3>
        </div>
       
        <input type="submit" value="Go Back" />
       
        </div>
      </form>
    </div>
  </body>
</html>';
}
$con->close();
?>