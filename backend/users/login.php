<?php

session_start();
include '../config/database.php';

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email'";

$result=$conn->query($sql);

if($result->num_rows>0){

$row=$result->fetch_assoc();

if(password_verify($password,$row['password'])){

$_SESSION['user_id']=$row['user_id'];
$_SESSION['role']=$row['role'];

if($row['role']=="admin"){

header("Location: ../admin/dashboard.php");

}else{

header("Location: ../customer/dashboard.php");

}

}

}

}
?>