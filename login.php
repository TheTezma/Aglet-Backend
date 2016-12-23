<?php
include 'login.php';

$userEmail = $_GET['userEmail'];
$userPass = $_GET['userPassword'];

$CheckUser = $Connect -> query("SELECT password FROM users WHERE email = '$userEmail'");
$User = $CheckUser -> fetch_array();

if($userPass === $User['password']) {
	//test
}
?>