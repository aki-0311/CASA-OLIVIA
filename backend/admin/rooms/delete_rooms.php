<?php

include '../../config/database.php';

$id=$_GET['id'];

$sql="DELETE FROM rooms

WHERE room_id='$id'";

$conn->query($sql);

header("Location:view_rooms.php");

?>