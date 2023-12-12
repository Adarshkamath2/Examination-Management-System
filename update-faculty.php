<?php
include 'db_config.php';

$sid = $_GET['sid'];
$nam = $_GET['nam'];
$dob = $_GET['dob'];
$con = $_GET['con'];
$gen = $_GET['gen'];
$age = $_GET['age'];



// $sid = $_POST['sid'];
// $name = $_POST['name'];
// $dob = $_POST['dob'];
// $contact = $_POST['contact'];
// $gender = $_POST['gender'];
// $fname = $_POST['fname'];
// $mname = $_POST['mname'];
// $app = $_POST['app'];
// $center = $_POST['center'];
// $repeater = $_POST['repeater'];
// $college = $_POST['college'];

// $sql = "update `Examination`.`student` set name='$name', dob='$dob', contact_number='$contact', gender='$gender', fname='$fname', mname='$mname', application_no='$app',center_id='$center',repeater='$repeater',college= '$college' where sid = "$sid";";
// echo $sql;

// if ($conn->query($sql) === TRUE) {
//     echo "<p>Place added successfully:</p>";
//     echo "<p>Name: $name</p>";
//     echo "<p>Description: $description</p>";
// } else {
//     echo 'Error: ' . $conn->error;
// }
// $con->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update</title>
    <link rel="stylesheet" href="formstyle.css" />
  </head>
  <body>
    <div class="container">
      <div class="title">Update Form</div>
      <form action="update-faculty2.php" method="post">
        <div class="user-details">
          
        <div class="input-box">
            <span class="details"> Faculty ID </span>
            <input
              type="text"
              name="sid"
              id="sid"
              placeholder="Enter Your Name"
              value = <?php echo $sid?>
              required
            />
          </div>
    
          <div class="input-box">
            <span class="details"> Name </span>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Enter Your Name"
              required
            />
          </div>
          <div class="input-box">
            <span class="details"> Date of Birth </span>
            <input
              type="text"
              name="dob"
              id="dob"
              placeholder="Enter Your Date-of-Birth(YYYY-MM-DD)"
              value = <?php echo $dob?>
              required
            />
          </div>
         
     
          <div class="input-box">
            <span class="details"> Gender </span>
            <input
              type="text"
              name="gender"
              id="gender"
              placeholder="Enter Your Gender(Ex. Male)"
              value = <?php echo $gen?>
              required
            />
          </div>
          <div class="input-box">
            <span class="details"> age </span>
            <input
              type="text"
              name="age"
              id="age"
              placeholder="Enter Your age"
              value = <?php echo $age?>
              required
            />
          </div>
          <div class="input-box">
            <span class="details"> Contact Number </span>
            <input
              type="text"
              name="con"
              id="con"
              placeholder="Enter Your Contact Number : Ex. +91 0000000000"
              required
            />
          </div>
        
    
        </div>
        <!-- <div class="gender-details">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for=""> <span class="dot one"></span> </label>
          </div>
        </div> -->
        <div class="button">
          <input type="submit" value="Update" />
        </div>
      </form>
    </div>
  </body>
</html>



