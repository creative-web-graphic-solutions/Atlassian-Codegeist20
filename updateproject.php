<?php
$conn =  mysqli_connect('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist'); 
    
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    
//    $sql = "UPDATE Projects SET projectname ='$_POST[activeproject]', startdate = '$_POST[startdate]', testdate =  '$_POST[testdate]', task =   '$_POST[task]', projectstatus = '$_POST[projectstatus]', owner = '$_POST[owner]', costofproject = '$_POST[costofproject]', projectassign = '$_POST[projectassign]', projectoverview ='$_POST[overview]' where projectname = '$_POST[activeproject]'";
//    

$sql = "UPDATE Projects SET projectname ='$_POST[activeproject]', testdate = '$_POST[testdate]', itemproduced = '$_POST[itemproduce]' , task =   '$_POST[task]' , projectstatus = '$_POST[status]' , defectsfound = '$_POST[defectsfound]' , sampletested = '$_POST[sampletest]'  where projectname = '$_POST[activeproject]'";
    

 if (mysqli_query($conn, $sql)) {
  echo "New record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>