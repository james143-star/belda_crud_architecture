<?php

$userN  = $_GET["thisUser"];
$passW  = $_GET["thisPass"];
$status  = $_GET["thisstatus"];



////specifying the credentials for connection

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

$sql = "INSERT INTO mogamitay(Username, Userpass, status)   
VALUES ('".$userN."', '".$passW."', '$status')";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert( "New record created successfully")</script>';
  echo '<script>window.location.href="/jamesA/CRUD.html"</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>