<?php
include "project.php";
if(isset($_GET['table'], $_GET['field'], $_GET['id'])){
    deleteData($_GET['table'], $_GET['field'], $_GET['id']);
}
header("Location:index.php");
exit;
?>