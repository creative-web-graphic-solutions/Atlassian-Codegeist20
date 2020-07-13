<?php
/* User login process, checks if user exists and password is correct */
$host = 'localhost';
$user = 'cwgshosting_codegeist';
$pass = 'codegeist20';
$db = 'cwgshosting_codegeist';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
session_start();
header("location: employeelist.php");

?>