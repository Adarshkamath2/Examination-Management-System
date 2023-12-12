<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="profile.css" />
    <title>Student-Details</title>
  </head>
  <body>
  
    <?php
      include 'db_config.php';

      $sid = $_POST['sid'];
      $dob = $_POST['dob'];
      // $sid = "SN001";
      // $dob = "2005-11-10";

      // echo "<br>".$name;
      $sql = "select * from student where sid = '$sid' and dob = '$dob';";
      // echo $sql;

      // if ($conn->query($sql) === TRUE) {
      //     echo "<p>Login successfully:</p>";
      //     echo "<p>Name: $sid</p>";
      //     echo "<p>Description: $name</p>";
      // } else {
      //     echo 'Error: ' . $conn->error;
      // }

      $result = $conn->query($sql); 
              if ($result->num_rows > 0) 
              { while ($row = $result->fetch_assoc()) 
                { // echo "<li>{$row['name']} - {$row['description']}</li>"; 
                $sid = $row['sid'];
                $nam = $row['name'];
                $dob = $row['dob'];
                $con = $row['contact_number'];
                $gen = $row['gender'];
                $fam = $row['fname'];
                $mam = $row['mname'];
                $app = $row['application_no'];
                $cen = $row['center_id'];
                // $rep = $row['repeater']
                $col = $row['college'];
              } } else {
                 echo "<h1>No Student found.</h1>";
                }

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

                  <h5>Student ID : </h5>
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
                  <h5>Fathers Name : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$fam.'</div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Mothers Name</h5>
                </div>
                <div class="col-md-9 text-secondary">'.$mam.'</div>
              </div>
              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Application Number : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$app.'</div>
              </div>

              <hr />
              <div class="row">
                <div class="col-md-3">
                  <h5>Center : </h5>
                </div>
                <div class="col-md-9 text-secondary">'.$cen.'</div>
              </div>
              <hr />
              <div class="row">
              <div class="col-md-3">
              <h5>College : </h5>
              </div>
              <div class="col-md-9 text-secondary">'.$col.'</div>
              </div>
              <hr />
              <div class="row">
              <div class="col-md-3">
              <div class="right flex-center">
              <a href="result.php?sid='.$sid.'" class="btn btn-secondary"
                >Get Results</a
              >
              <div class="menu-btn">
                <i class="fas fa-bars"></i>
              </div>
              </div>
              </div>

              <div class="col-md-9 text-secondary">
              <div class="right flex-center">
              <a href="update-stud.php?sid='.$sid.'&nam='.$nam.'&con='.$con.'&gen='.$gen.'&fam='.$fam.'&mam='.$nam.'&mam='.$nam.'&app='.$app.'&cen='.$cen.'&col='.$col.'&dob='.$dob.'" class="btn btn-secondary"
                >Update Details</a
              >
              <div class="menu-btn">
                <i class="fas fa-bars"></i>
              </div>
              </div>
              </div>

              </div>

              <hr />
              <div class="row">
              <div class="col-md-3">
              <div class="right flex-center"></div>
              <a href="index.html" class="btn btn-secondary"
                >Log Out</a
              >
              <div class="menu-btn">
                <i class="fas fa-bars"></i>
              </div>
              </div>
              </div>
              </div>
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

