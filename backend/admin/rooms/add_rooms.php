<?php
include '../../config/database.php';

if(isset($_POST['add'])){

$room_name=$_POST['room_name'];
$capacity=$_POST['capacity'];
$price=$_POST['price'];

$sql="INSERT INTO rooms
(room_name,capacity,price,status)

VALUES
('$room_name','$capacity','$price','Available')";

$conn->query($sql);

}
?>

<form method="POST">

Room Name:
<input type="text" name="room_name"><br>

Capacity:
<input type="number" name="capacity"><br>

Price:
<input type="number" name="price"><br>

<button name="add"><br>
Add Room
</button>

</form>