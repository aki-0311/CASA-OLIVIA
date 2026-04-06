<?php
include '../../config/database.php';

$sql="SELECT * FROM rooms";

$result=$conn->query($sql);

while($row=$result->fetch_assoc()){

echo $row['room_name'];
echo $row['capacity'];
echo $row['price'];

echo "<a href='update_room.php?id=".$row['room_id']."'>Edit</a>";

echo "<a href='delete_room.php?id=".$row['room_id']."'>Delete</a>";

echo "<br>";

}
?>