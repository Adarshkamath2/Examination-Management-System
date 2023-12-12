<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- CSS -->

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- AOS -->

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- FONTAWESOME -->
    <title>Result</title>
  </head>
  <body>
    <div class="container">
      <h1>COMMON ENTRANCE EXAM PROVISONAL RESULTS</h1>
      <p>E-Results</p>
      <?php
      include 'db_config.php';

      $sid = $_GET['sid'];
      $sql = "SELECT * FROM student where sid = '$sid';";
      $result = $conn->query($sql); 
      if ($result->num_rows > 0) 
      { 
        while ($row = $result->fetch_assoc()) 
        { 
          $sid = $row['sid'];
          $nam = $row['name'];
          $fam = $row['fname'];
          $dob = $row['dob'];
          $app = $row['application_no'];
          $col = $row['college'];
      } 
      } else { echo "No places found."; } 
      $conn->close(); 
      ?>
      <table border="1px">
        <tr>
          <td colspan="3"><span>Roll No : </span><?php echo $sid ?></td>
          <td colspan="6"><span>Application Number : </span><?php echo $app ?></td>
        </tr>
        <tr>
          <td colspan="3"><span>Name : </span><?php echo $nam ?></td>
          <td colspan="6"><span>Date of Birth : </span><?php echo $dob ?></td>
        </tr>
        <tr>
          <td colspan="6"><span>Father Name :  </span> <?php echo $fam ?></td>
        </tr>
        <tr>
          <td colspan="6"><span>College : </span> <?php echo $col ?></td>
        </tr>
        <tr style="background-color: lightskyblue">
          <th>Date</th>
          <th>Course Code</th>
          <th>Paper ID</th>
          <th>Total marks</th>
          <th>Obtained Marks</th>
          <!-- <th>Pid</th> -->
        </tr>
        <!-- pid	
marks	
edate	
sid	
course_code	
fid	 -->
        <?php
          include 'db_config.php';
          $sql = "SELECT * FROM paperi where sid = '$sid';";
          $result = $conn->query($sql); 
          if ($result->num_rows > 0) 
          { 
            while ($row = $result->fetch_assoc()) 
            { 
              echo "<tr>
              <td>".$row['edate']."</td>
              <td>".$row['course_code']."</td>
              <td>".$row['pid']."</td>
              <td>100</td>
              <td>".$row['marks']."</td>
            </tr>";
          } 
          } else { echo "No places found."; } 
          $conn->close(); 
        ?>
        <!-- <tr>
          <td>01</td>
          <td>English</td>
          <td>100</td>
          <td>83</td>
          <td>83</td>
          <td>pass</td>
        </tr>
        <tr>
          <td>02</td>
          <td>English</td>
          <td>100</td>
          <td>83</td>
          <td>83</td>
          <td>pass</td>
        </tr>
        <tr>
          <td>03</td>
          <td>English</td>
          <td>100</td>
          <td>83</td>
          <td>83</td>
          <td>pass</td>
        </tr>
        <tr>
          <td>04</td>
          <td>English</td>
          <td>100</td>
          <td>83</td>
          <td>83</td>
          <td>pass</td>
        </tr>
        <tr>
          <td>05</td>
          <td>English</td>
          <td>100</td>
          <td>83</td>
          <td>83</td>
          <td>pass</td>
        </tr>
        <tr>
          <td>06</td>
          <td>English</td>
          <td>100</td>
          <td>83</td>
          <td>83</td>
          <td>pass</td>
        </tr> -->
<!-- 
sid	
total_marks	
pass_fail	
rank_	
percentage -->
        <?php
          include 'db_config.php';
          $sql = "SELECT * FROM marks where sid = '$sid';";
          $result = $conn->query($sql); 
          if ($result->num_rows > 0) 
          { 
            while ($row = $result->fetch_assoc()) 
            { 
              $tot = $row['total_marks'];
              $pas = $row['pass_fail'];
              $ran = $row['rank_'];
              $per = $row['percentage'];
          } 
          } else { echo "No Records found."; } 
          $conn->close(); 
        ?>
        <tr style="background-color: lightcyan">
          <th colspan="3"><span>Total Marks : </span><?php echo $tot ?></th>
          <th colspan="6"><span>Rank : </span><?php echo $ran ?></th>
        </tr>
        <tr style="background-color: lightcyan">
          <th colspan="3"><span>Percentage : </span><?php echo $per ?></th>
          <th colspan="6"><span>Result : </span><?php echo $pas ?></th>
        </tr>
        
      </table>
      
   
  </body>
</html>

<style>
  table {
    border-collapse: collapse;
    margin: auto;
    padding: auto;
    height: 500px;
    width: 50%;
  }

  .container p {
    text-align: center;
  }

  .container h1 {
    font-size: 20px;
    text-align: center;
  }

  th {
    padding: 0 20px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
      Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
      sans-serif;
  }

  td {
    padding: 0 20px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
      Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
      sans-serif;
  }

  span {
    font-weight: bold;
  }

  .btn{
    margin : auto;
    allign-items : center;
  }
</style>
