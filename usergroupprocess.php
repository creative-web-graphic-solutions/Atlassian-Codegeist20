<?php

session_start();

$mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist') or die($mysqli->error);


if (isset($_POST['submit'])){
      
    $sql = "INSERT INTO groupmgt (groupname, noofusers, joblocation, creationdate, status) VALUES('$_POST[groupname]', '$_POST[noofusers]' , '$_POST[joblocation]' , '$_POST[creationdate]', '$_POST[status]')";
        
        $mysqli->query($sql) or die($mysqli->error);    
        
    header("location: groupmanagement.php");
    
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM groupmgt WHERE id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: groupmanagement.php");
}