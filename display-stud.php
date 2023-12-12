<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Students</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body>
        <!-- HEADER -->
        <!-- <header>
      <div class="container flex-row">
        <div class="header__logo">
          <img src="assets/img/logo.png" alt="Logo" />
        </div>
        <nav>
          <ul class="header__menu flex-row">
            <li>
              <a href="#hero">Home</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#team">Team</a>
            </li>
            <li>
              <a href="display-stud.php">Students</a>
            </li>
            <li>
              <a href="#projects">Projects</a>
            </li>
            <li>
              <a href="reg.html">Testimonial</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
        <div class="right flex-center">
          <a href="#contact" class="btn btn-secondary">Get a Quote</a>
          <div class="menu-btn">
            <i class="fas fa-bars"></i>
          </div>
        </div>
      </div>
    </header> -->
    <!-- HEADER -->
    
    <div class="tab">
      <table>
        <tr id = "header">
        <th>Student ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Contact Number</th>
        <th>Gender</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Application No</th>
        <th>Center ID</th>
        <th>Repeater</th>
        <th>College</th>
        </tr>
        <?php
        include 'db_config.php';

        $sql = "SELECT * FROM student";
    // $sql = "SELECT * FROM places";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) 
        { while ($row = $result->fetch_assoc()) 
          { // echo "<li>{$row['name']} - {$row['description']}</li>"; 
          echo "
        <tr>
          <td>".$row['sid']."</td>
          <td>".$row['name']."</td>
          <td>".$row['dob']."</td>
          <td>".$row['contact_number']."</td>
          <td>".$row['gender']."</td>
          <td>".$row['fname']."</td>
          <td>".$row['mname']."</td>
          <td>".$row['application_no']."</td>
          <td>".$row['center_id']."</td>
          <td>".$row['repeater']."</td>
          <td>".$row['college']."</td>
        </tr>
        "; } } else { echo "No places found."; } $conn->close(); ?>
      </table>
    </div>
  </body>
</html>
