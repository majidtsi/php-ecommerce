<?php
$servername = "localhost";
$username = "root";
$password = "1919";
$dbname = "ecommerce";
/*
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    var_dump($row);
    echo "<hr>";
  }
} else {
    echo "0 results";
  }
$conn->close();
*/
var_dump(unserialize(45));
?>