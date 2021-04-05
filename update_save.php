<?php

$userN  = $_GET["thisUser"];
$passW  = $_GET["thisPass"];



////specifying the credentials for connection
//$servername = "192.168.254.100";
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

$sql = "update  mogamitay set Userpass= '".$passW."' where Username = '".$userN."'";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert( "New record updated successfully")</script>';
  echo '<script>window.location.href="/jamesA/CRUD.html"</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>