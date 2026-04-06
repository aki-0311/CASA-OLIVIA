<?php
include "project.php";

if(isset($_POST['action'])){

    if($_POST['action']=="customer"){
        addCustomer(
            $_POST['fn'],
            $_POST['ln'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['address']
        );
    }

    if($_POST['action']=="service"){
        addService(
            $_POST['name'],
            $_POST['type'],
            $_POST['price'],
            $_POST['desc']
        );
    }

    if($_POST['action']=="order"){
        addOrder(
            $_POST['cust'],
            $_POST['serv'],
            $_POST['qty'],
            $_POST['status']
        );
    }

    if($_POST['action']=="payment"){
        addPayment(
            $_POST['order'],
            $_POST['date'],
            $_POST['amount'],
            $_POST['method'],
            $_POST['status']
        );
    }

    header("Location:index.php");
    exit;
}
?>
