<?php
session_start();
include "database_connect.php";

/* ===== ADD FUNCTIONS ===== */
function addCustomer($fn,$ln,$email,$phone,$address){
    global $conn;
    return $conn->query("INSERT INTO customers(first_name,last_name,email,phone,address) VALUES ('$fn','$ln','$email','$phone','$address')");
}

function addService($name,$type,$price,$desc){
    global $conn;
    return $conn->query("INSERT INTO services(service_name,service_type,price,description) VALUES ('$name','$type','$price','$desc')");
}

function addOrder($cust,$serv,$qty,$status){
    global $conn;
    $price = $conn->query("SELECT price FROM services WHERE service_id='$serv'")->fetch_assoc()['price'];
    $total = $price * $qty;
    return $conn->query("INSERT INTO orders(customer_id,service_id,quantity,total_price,status,order_date) VALUES ('$cust','$serv','$qty','$total','$status',CURDATE())");
}

function addPayment($order,$date,$amount,$method,$status){
    global $conn;
    return $conn->query("INSERT INTO payments(order_id,payment_date,amount,payment_method,status) VALUES ('$order','$date','$amount','$method','$status')");
}

/* ===== GET FUNCTIONS ===== */
function getCustomers(){ global $conn; return $conn->query("SELECT * FROM customers ORDER BY customer_id DESC"); }
function getServices(){ global $conn; return $conn->query("SELECT * FROM services ORDER BY service_id DESC"); }
function getOrders(){ 
    global $conn; 
    return $conn->query("SELECT o.*, c.first_name, c.last_name, s.service_name, s.price
        FROM orders o
        JOIN customers c ON o.customer_id=c.customer_id
        JOIN services s ON o.service_id=s.service_id
        ORDER BY o.order_id DESC");
}
function getPayments(){ 
    global $conn;
    return $conn->query("SELECT p.*, o.order_id, c.first_name, c.last_name
        FROM payments p
        JOIN orders o ON p.order_id=o.order_id
        JOIN customers c ON o.customer_id=c.customer_id
        ORDER BY p.payment_id DESC");
}

/* ===== DELETE FUNCTION ===== */
function deleteData($table,$id_field,$id){
    global $conn;
    return $conn->query("DELETE FROM $table WHERE $id_field='$id'");
}

/* ===== LOGIN ===== */
function login($username,$password){
    global $conn;
    $res = $conn->query("SELECT * FROM users WHERE username='$username'")->fetch_assoc();
    if($res && password_verify($password,$res['password'])){
        $_SESSION['user_id']=$res['user_id'];
        $_SESSION['username']=$res['username'];
        $_SESSION['role']=$res['role'];
        return true;
    }
    return false;
}

function checkLogin(){
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit;
    }
}
?>