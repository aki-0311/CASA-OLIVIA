<?php

session_start();
include '../../config/database.php';

if(isset($_POST['reserve'])){

$user_id=$_SESSION['user_id'];

$room_id=$_POST['room_id'];

$start=$_POST['start_date'];
$end=$_POST['end_date'];

# CHECK OVERLAP

$check="SELECT * FROM reservations

WHERE room_id='$room_id'

AND (

start_date <= '$end'

AND end_date >= '$start'

)";

$result=$conn->query($check);

if($result->num_rows>0){

echo "Room Not Available";

}
else{

$sql="INSERT INTO reservations

(user_id,room_id,start_date,end_date,status)

VALUES

('$user_id','$room_id','$start','$end','Pending')";

$conn->query($sql);

echo "Reservation Success";

}

}

?>