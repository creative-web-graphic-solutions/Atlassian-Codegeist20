<?php

session_start();

$mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist') or die($mysqli->error);

$id = 0;
$update = false;
$name = '';
$location = '';

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
    $mysqli->query("DELETE FROM equipments WHERE id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: resources.php");
}

if (isset($_GET['edit'])){
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

if (isset($_POST['update'])){
    $id = $_POST['id'];
//    $employeeno = $_POST['employeenum'];
//    $employeename = $_POST['employeename'];
//    $joblocation = $_POST['joblocation'];
//    $dateofjoin = $_POST['dateofjoin'];
//    $contactnumber = $_POST['contactnumber'];
//    $designation = $_POST['designation'];
//    $status = $_POST['status'];
    $mysqli->query("UPDATE equipments SET employeeno='$employeenum' , employeename='$employeename', joblocation='$joblocation', dateofjoin='$dateofjoin', contactnumber='$contactnumber', designation='$designation', status='$status' WHERE id=$id") or
            die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header('location: resources.php');
}

            
?>