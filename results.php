<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header style = "font-size : 40px">
        Results
    </header>
    <a href="./add.php">Add New Place</a>
    <h3>Places</h3>
    <div class = "tab">
    <table>
      
      <?php
        include 'db_config.php';
        $sql = "SELECT * FROM student where sid = 'SN001';";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // echo "<li>{$row['name']} - {$row['description']}</li>";
                echo "<tr><td>".$row['name']."</td><td>".$row['dob']."</td><td>".$row['application_no']."</td><td>".$row['college']."</td></tr>"; 
                



            }
        } else {
            echo "No Records found.";
        }

        $conn->close();
        ?>
</table>
        </div>
</body>
</html>