<?php 
	require '../connect.php';

	$pdo = Database::connect();
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$register = $pdo->prepare("INSERT INTO user (email, first_name, last_name, username, password) VALUES(?, ?, ?, ?, ?)");
	$register->execute(array($email, $first_name, $last_name, $username, $password));
	header("Location: ../index.php");
?>