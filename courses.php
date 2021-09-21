<?php
$servername = "localhost";
$username = "root@localhost";
$password = "YES";
$dbname = "it1150";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT course_id, title,credit_hrs FROM courses";
$result = $conn->query($sql);

if ($result > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["course_id"]. " - Name: " . $row["title"]. " " . $row["credit_hrs"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>