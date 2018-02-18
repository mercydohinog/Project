<?php 
	include "../connect.php";

	$pdo = Database::connect();
	$username = $_POST['username'];
	$password = $_POST['password'];
?>