<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="profile.css" />
    <title>Faculty-Details</title>
  </head>
  <body>
    <?php
      include 'db_config.php';

      $fid = $_POST['fid'];
      $dob = $_POST['dob'];
    //   $fid = "1";
    //   $dob = "1980-05-12";

      // echo "<br>".$name;
      $sql = "select * from faculty where fid = $fid and date_of_birth = '$dob';";
    //   echo $sql;

      // if ($conn->query($sql) === TRUE) {
      //     echo "<p>Login successfully:</p>";
      //     echo "<p>Name: $sid</p>";
      //     echo "<p>Description: $name</p>";
      // } else {
      //     echo 'Error: ' . $conn->error;
      // }

// fid	
// faculty_name	
// date_of_birth	
// contact_number	
// gender	
// age	

      $result = $conn->query($sql); 
              if ($result->num_rows > 0) 
              { while ($row = $result->fetch_assoc()) 
                { // echo "<li>{$row['name']} - {$row['description']}</li>"; 
                $sid = $row['fid'];
                $nam = $row['faculty_name'];
                $dob = $row['date_of_birth'];
                $con = $row['contact_number'];
                $gen = $row['gender'];
                $fam = $row['age'];
             
              } } else { echo "<h2>No Records found.<h2></h2>"; }

              // echo" <a href='result.php'>Student Login</a>";
              echo'
      
      <div class="container">
        <div class="main">
          <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
              <h1 class="m-3 pt-3">Hello, '.$nam.'!!</h1>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">

                  <h5>Faculty ID : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$sid.'</div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Name : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$nam.'</div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Date of Birth : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$dob.'</div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Contact Number : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$con.'</div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Gender : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$gen.'</div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Age : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$fam.'</div>
              </div>
              
              <hr />
              <div class="row">
              <div class="col-md-3">

      
              <div class="right flex-center">
              <a href="index.html" class="btn btn-secondary"
                >Log Out</a
              >
              <div class="menu-btn">
                <i class="fas fa-bars"></i>
              </div>
              </div>
             

              </div>
              <div class="col-md-9 text-secondary">
              <div class="right flex-center">
              <a href="update-faculty.php?sid='.$sid.'&nam='.$nam.'&con='.$con.'&gen='.$gen.'&age='.$age.'&dob='.$dob.'" class="btn btn-secondary"
                >Update Details</a
              >
              <div class="menu-btn">
                <i class="fas fa-bars"></i>
              </div>
              </div>
              </div>
              </div>
              
              <hr />
              

              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>';
    $con->close();
    ?>
  </body>
</html>

