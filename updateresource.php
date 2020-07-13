<?php
session_start();
$conn = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$id = 0;
//$update = false;
//$name = '';
//$location = '';

if (isset($_GET['update'])){

    $id = $_GET['update'];
    $purpose = $_GET['purpose'];
    $joblocation = $_GET['joblocation'];
    $equipmentneed = $_GET['equipmentneed'];
    $availableequip = $_GET['availableequip'];
       $sql = "UPDATE equipments SET purpose='$purpose' , joblocation='$joblocation', equipmentneed='$equipmentneed', availableequip='$availableequip' WHERE id='$id'";
       
 if (mysqli_query($conn, $sql)) {
   $_SESSION['message'] = "Record has been updated!. $id, $purpose,$joblocation,$equipmentneed,$availableequip ";
     
  header('location: resources.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if (isset($_POST['update2'])){

    $id = $_POST['id'];
    $sun = $_POST['sun'];
    $mon = $_POST['mon'];
    $tue = $_POST['tue'];
    $wed = $_POST['wed'];
    $thu = $_POST['thu'];
    $fri = $_POST['fri'];
    $sat = $_POST['sat'];
    $sql = "UPDATE equipments SET sun='$sun', mon='$mon', tue='$tue', wed='$wed', thu='$thu',fri='$fri', sat='$sat' WHERE id='$id'";
       
 if (mysqli_query($conn, $sql)) {
   $_SESSION['message'] = "Record has been updated!";
     $id=0;
  header('location: resources.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

//if (isset($_POST['empupdate'])){
//
//    $id = $_POST['id'];
//    $empname = $_POST['employeename'];
//    $projectassign = $_POST['projectassign'];
//    $contactnumber = $_POST['contactnumber'];
//    $designation = $_POST['designation'] ;   
//   
//    $sql = "UPDATE employees SET employeename='$empname', projectassign='$projectasssign', contactnumber='$contactnumber', designation='$designation' WHERE id='$id'";
//       
// if (mysqli_query($conn, $sql)) {
//   $_SESSION['message'] = "Record has been updated!";
//  header('location: resources.php');
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}
//}


if (isset($_POST['delete'])){
     $id = $_POST['id'];
    $sql = "DELETE FROM equipments WHERE id='$id'";
    
       
 if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: resources.php");    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}    
    
   
    
}


$conn->close();    
    
    
?>