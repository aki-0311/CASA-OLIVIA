<?php

include '../../config/database.php';

$id=$_GET['id'];

if(isset($_POST['update'])){

$room_name=$_POST['room_name'];
$capacity=$_POST['capacity'];
$price=$_POST['price'];

$sql="UPDATE rooms

SET

room_name='$room_name',
capacity='$capacity',
price='$price'

WHERE room_id='$id'";

$conn->query($sql);

}

?>