<?php

session_start();

$conn = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    
//    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or
//            die($mysqli->error);
        
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    
    header("location: resources.php");
    
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM equipmetns WHERE id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: resources.php");
}

if (isset($_GET['edit1'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM equipments WHERE id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        
//        $employeenum = $row['employeenum'];
//        $employeename = $row['employeename'];
//        $joblocation = $row['joblocation'];
//        $dateofjoin = $row['dateofjoin'];
//        $contactnumber = $row['contactnumber'];
//        $designation = $row['designation'];
//        $status = $row['status'];
    }
}

if (isset($_POST['update1'])){
    
    $id = $_POST['id'];
    $purpose = $_POST['purpose'];
    $joblocation = $_POST['joblocation'];
    $equipmentneed = $_POST['equipmentneed'];
    $availableequip = $_POST['availableequip'];
    $sql = "UPDATE equipments SET purpose='$purpose' , joblocation='$joblocation', equipmentneed='$equipmentneed', availableequip='$availableequip' WHERE id='$id'";
       
 if (mysqli_query($conn, $sql)) {
     $_SESSION['message'] = "Record has been updated!";
  header('location: resources.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  
    
    
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
  header('location: resources.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
            
?>