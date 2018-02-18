<?php 
	require "../connect.php";
	include "../successlogin.php";

	$pdo = Database::connect();

	$name = $_REQUEST['petName'];
	$quantity = $_REQUEST['quantity'];
	$id = $pdo->prepare("SELECT * FROM pet WHERE pname = '$name'");
	$id->execute();
	$id = $id->fetch(PDO::FETCH_ASSOC);

	$item = $pdo->prepare("INSERT INTO groups (groupid, itemid, quantity) VALUES(?,?,?)");
	$item->execute(array($_SESSION['id'], $id['petid'], $quantity));

	header("Location:../home.php");
?>