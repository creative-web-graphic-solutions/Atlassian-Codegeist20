<?php
$conn =  mysqli_connect('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist'); 
    
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    
    $sql = "INSERT INTO equipments (purpose, equipmentneed, joblocation, availableequip, projectassign, empid, sun, mon, tue, wed, thu, fri, sat) VALUES('$_POST[projectname]', '$_POST[equipneed]', '$_POST[joblocation]', '$_POST[availequip]', '$_POST[projectassign]' , '$_POST[empid]', '$_POST[sun]', '$_POST[mon]','$_POST[tue]','$_POST[wed]','$_POST[thu]', '$_POST[fri]', '$_POST[sat]')";
    
 if (mysqli_query($conn, $sql)) {
  header("location: success.html"); 
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>