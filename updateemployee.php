<?php
session_start();
$conn = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['empupdate'])){

    $id = $_POST['empid'];
    $employeename = $_POST['employeename'];
    $employeeno = $_POST['employeeno'];
    $joblocation =$_POST['joblocation'];
    $dateofjoin = $_POST['dateofjoin'];
    $designation =$_POST['designation'];
    $contactnumber =$_POST['contactnumber'];     
    $sql = "UPDATE employees SET employeename='$employeename', employeeno='$employeeno', joblocation='$joblocation', dateofjoin='$dateofjoin', designation = '$designation', contactnumber='$contactnumber' WHERE id='$id'";
       
 if (mysqli_query($conn, $sql)) {
   $_SESSION['message'] = "Record has been updated!";
  header('location: employeelist.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


if (isset($_POST['delete'])){
     $id = $_POST['empid'];
    $sql = "DELETE FROM employees WHERE id='$id'";
    
       
 if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: employeelist.php");    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}    
    
   
    
}


$conn->close();    
    
    
?>