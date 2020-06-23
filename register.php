<?php
$servername = "localhost";
$username = "cwgshosting_codegeist";
$password = "codegeist20";
$dbname = "cwgshosting_codegeist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO codegeistregister (FirstName, LastName, Email, Password, ContactNo, MyPhoto)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]','$_POST[password]','$_POST[contactnumber]','$_POST[myfile]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>