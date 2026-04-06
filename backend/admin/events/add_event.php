<?php
include '../../config/database.php';

if(isset($_POST['add'])){

$name=$_POST['event_name'];
$desc=$_POST['description'];
$price=$_POST['price'];

$sql="INSERT INTO events

(event_name,description,price)

VALUES

('$name','$desc','$price')";

$conn->query($sql);

}
?>