

<?php
include 'db_config.php';

$sid = $_POST['sid'];
$dob = $_POST['dob'];

echo "<br>".$name;
$sql = "select * from student where sid = '$sid' and dob = '$dob';";
echo $sql;

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
          echo "
        <tr>
          <td>".$row['sid']."</td>
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
        "; } } else { echo "No places found."; }

        echo" <a href='result.php'>Student Login</a>";
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="right flex-center">
          <a href="result.php" class="btn btn-secondary"
            >Student Login</a
          >
          <div class="menu-btn">
            <i class="fas fa-bars"></i>
          </div>
          </div>
</body>
</html>


