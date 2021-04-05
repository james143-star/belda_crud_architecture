<?php

$userN = $_GET["thisUser"];

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "architecture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record

$query = "SELECT * FROM mogamitay";

$sql = "delete  from mogamitay  where Username = '".$userN."'";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Record deleted successfully")</script>';
  echo '<script>window.location.href="/jamesA/CRUD.html"</script>';
} else {
  echo "Error deleting record: " . $conn->error;  
}

$conn->close();
?>