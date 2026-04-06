<?php

include '../../config/database.php';

if(isset($_POST['add'])){

$name=$_POST['equipment_name'];
$qty=$_POST['quantity'];
$price=$_POST['price'];

$sql="INSERT INTO equipment

(equipment_name,quantity,price)

VALUES

('$name','$qty','$price')";

$conn->query($sql);

}

?>