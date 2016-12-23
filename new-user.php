<?php
include 'dbconnect.php';

$userEmail = $_GET['userEmail'];
$userPassword = $_GET['userPassword'];

$RegisterUser = $Connect -> query("INSERT INTO users (email, password) VALUES ('$userEmail', '$userPassword')");
?>