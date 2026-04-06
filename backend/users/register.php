<?php
include '../config/database.php';

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$contact = $_POST['contact'];

$sql = "INSERT INTO users 
(name,email,password,role,contact_number)

VALUES
('$name','$email','$password','customer','$contact')";

if($conn->query($sql)){
echo "Registered Successfully";
}
else{
echo "Error: ".$conn->error;
}

}
?>

<form method="POST">

Name:
<input type="text" name="name" required><br>

Email:
<input type="email" name="email" required><br>

Password:
<input type="password" name="password" required><br>

Contact:
<input type="text" name="contact"><br>

<button name="register"><br>
Register
</button>

</form>