<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO students (Name, Roll)
VALUES ('Robin', '223')";

if (mysqli_query($conn, $sql)) {
  echo "New entry in<br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn,$sql);
echo mysqli_num_rows($result);

?> 