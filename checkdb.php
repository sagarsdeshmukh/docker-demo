<?php
$servername = "db";
$username = "travellist_user";
$password = "password";
$dbname = "travellist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Mysql DB connected successfully...<br><br>";
}

$sql = "SELECT id, name, visited FROM places";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<b>Id	Name</b><br>";
  while($row = $result->fetch_assoc()) {
    echo $row["id"]. "	" . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();