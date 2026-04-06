<?php

session_start();
include '../../config/database.php';

$user_id=$_SESSION['user_id'];

$sql="SELECT * FROM reservations

WHERE user_id='$user_id'";

$result=$conn->query($sql);

while($row=$result->fetch_assoc()){

echo $row['start_date'];
echo $row['end_date'];
echo $row['status'];

echo "<br>";

}

?>