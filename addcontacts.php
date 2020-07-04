<?php
$conn =  mysqli_connect('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist'); 
    
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    
    $sql = "INSERT INTO contacts (companyname, registerno, email, contacttype, reviewedby, reviewother, approvedby, approveother ) VALUES('$_POST[companyname]', '$_POST[registernumber]', '$_POST[email]', '$_POST[contacttype]', '$_POST[reviewby]', '$_POST[reviewother]', '$_POST[approveby]', '$_POST[approveother]')";
    
 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

                
?>