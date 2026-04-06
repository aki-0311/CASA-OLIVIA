<?php
include "project.php";
if(isset($_POST['login'])){
    if(login($_POST['username'],$_POST['password'])){
        header("Location:index.php"); exit;
    } else { $error="Invalid credentials"; }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<div class="container">
<h2>Login</h2>
<form method="post">
<input name="username" placeholder="Username"><br>
<input type="password" name="password" placeholder="Password"><br>
<button name="login">Login</button>
</form>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
</div>
</body>
</html>