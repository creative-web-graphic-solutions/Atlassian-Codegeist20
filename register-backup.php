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

if(isset($_FILES['myfile'])){
    
   $file = base64_encode(file_get_contents($_FILES["myfile"]["tmp_name"])); 
}


$sql = "INSERT INTO codegeistregister (FirstName, LastName, Email, Password, ContactNo, MyPhoto)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]','$_POST[password]','$_POST[contactnum]','$file')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>