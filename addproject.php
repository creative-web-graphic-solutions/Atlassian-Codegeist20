<?php
$conn =  mysqli_connect('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist'); 
    
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    
    $sql = "INSERT INTO Projects (projectname, startdate, enddate, schedule, task, projectstatus, owner, costofproject, projectassign, projectoverview) VALUES('$_POST[projectname]', '$_POST[startdate]', '$_POST[enddate]', '$_POST[schedule]', '$_POST[task]', '$_POST[projectstatus]','$_POST[owner]','$_POST[costofproject]','$_POST[projectassign]','$_POST[overview]')";
    
 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>