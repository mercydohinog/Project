<?php 
	include "../connect.php";

session_start();
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $pdo = Database::connect();
    $query = $pdo->prepare("SELECT * FROM user WHERE 
                         username='$user' AND password='$pass'");
    $query->execute();
    $count = $query->fetch(PDO::FETCH_ASSOC);

    if($count!="")
    {
    $_SESSION['login_username']=$user;
    $_SESSION['id'] = $count['userid'];
        header("Location:../home.php"); 
    }else{
        header("Location: ../login.php");
    }
}
?>