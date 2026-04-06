<?php
include "project.php";
checkLogin();

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fn = $_POST['fn']; $ln = $_POST['ln'];
    $email = $_POST['email']; $phone=$_POST['phone']; $addr=$_POST['address'];
    $conn->query("UPDATE customers SET first_name='$fn', last_name='$ln', email='$email', phone='$phone', address='$addr' WHERE customer_id='$id'");
    header("Location:index.php"); exit;
}

$cust = $conn->query("SELECT * FROM customers WHERE customer_id=".$_GET['id'])->fetch_assoc();
?>
<form method="post">
<input type="hidden" name="id" value="<?=$cust['customer_id']?>">
<input name="fn" value="<?=$cust['first_name']?>">
<input name="ln" value="<?=$cust['last_name']?>">
<input name="email" value="<?=$cust['email']?>">
<input name="phone" value="<?=$cust['phone']?>">
<input name="address" value="<?=$cust['address']?>">
<button name="update">Update</button>
</form>