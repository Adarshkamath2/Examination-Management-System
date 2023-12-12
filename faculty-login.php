<?php
include 'db_config.php';

$fid = $_POST['fid'];
$dob = $_POST['dob'];

echo "<br>".$name;
$sql = "select * from faculty where fid = '$fid' and date_of_birth = '$dob';";
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
          <td>".$row['fid']."</td>
          <td>".$row['dob']."</td>
        </tr>
        "; } } else { echo "No Records found."; }
$con->close();
?>

