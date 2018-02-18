<?php 
	require '../connect.php';
	include '../successlogin.php';

	$pdo = Database::connect();
	$checkout = $pdo->prepare("DELETE FROM groups WHERE groupid = ?");
	$checkout->execute(array($_SESSION['id']));
	 header('Location: ../home.php');
?>