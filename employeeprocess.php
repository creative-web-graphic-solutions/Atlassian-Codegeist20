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
    
    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or
            die($mysqli->error);
        
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";
    
    header("location: index.php");
    
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM employees WHERE id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: employeelist.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM employees WHERE id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        
        $employeenum = $row['employeenum'];
        $employeename = $row['employeename'];
        $joblocation = $row['joblocation'];
        $dateofjoin = $row['dateofjoin'];
        $contactnumber = $row['contactnumber'];
        $designation = $row['designation'];
        $status = $row['status'];
    }
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $employeeno = $_POST['employeenum'];
    $employeename = $_POST['employeename'];
    $joblocation = $_POST['joblocation'];
    $dateofjoin = $_POST['dateofjoin'];
    $contactnumber = $_POST['contactnumber'];
    $designation = $_POST['designation'];
    $status = $_POST['status'];
    $result = $mysqli->query("UPDATE employees SET employeeno='$employeeno' , employeename='$employeename', joblocation='$joblocation', dateofjoin='$dateofjoin', contactnumber='$contactnumber', designation='$designation', status='$status' WHERE employeeno='$employeeno'") or
            die($mysqli->error);
       
    header('location: success.html');
}

            
?>