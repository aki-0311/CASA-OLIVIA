<?php
include "project.php";
$id = $_GET['id'];
$order = $conn->query("SELECT o.*, c.first_name, c.last_name, s.service_name, s.price FROM orders o
JOIN customers c ON o.customer_id=c.customer_id
JOIN services s ON o.service_id=s.service_id WHERE o.order_id='$id'")->fetch_assoc();
?>
<h2>Receipt</h2>
<p>Customer: <?=$order['first_name']." ".$order['last_name']?></p>
<p>Service: <?=$order['service_name']?></p>
<p>Quantity: <?=$order['quantity']?></p>
<p>Price per unit: <?=$order['price']?></p>
<p>Total: <?=$order['total_price']?></p>
<button onclick="window.print()">Print Receipt</button>