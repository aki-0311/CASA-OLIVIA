<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customers_order";

// Connect
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) die("Connection failed: ".$conn->connect_error);

// Create DB if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

// Create Tables
$conn->query("
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin','staff') DEFAULT 'staff'
)");

$conn->query("
CREATE TABLE IF NOT EXISTS customers (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(20),
    address VARCHAR(255)
)");

$conn->query("
CREATE TABLE IF NOT EXISTS services (
    service_id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(100),
    service_type VARCHAR(50),
    price DECIMAL(10,2),
    description TEXT
)");

$conn->query("
CREATE TABLE IF NOT EXISTS orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    service_id INT,
    quantity INT,
    total_price DECIMAL(10,2),
    status VARCHAR(50),
    order_date DATE,
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id) ON DELETE CASCADE,
    FOREIGN KEY (service_id) REFERENCES services(service_id) ON DELETE CASCADE
)");

$conn->query("
CREATE TABLE IF NOT EXISTS payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    payment_date DATE,
    amount DECIMAL(10,2),
    payment_method VARCHAR(50),
    status VARCHAR(50),
    FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE
)");

// Create a default admin if not exists
$admin_check = $conn->query("SELECT * FROM users WHERE username='admin'");
if($admin_check->num_rows == 0){
    $pass = password_hash("admin123", PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users (username,password,role) VALUES ('admin','$pass','admin')");
}
?>