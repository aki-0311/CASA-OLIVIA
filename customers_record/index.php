<?php
include "project.php";

$customers = getCustomers();
$services = getServices();
$orders = getOrders();
$payments = getPayments();

$custList = getCustomers();
$servList = getServices();
$orderList = getOrders();
?>
<!DOCTYPE html>
<html>
<head>

<title>Customers Record System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f7fa;
}

.container{
    max-width:1100px;
}

h2{
    text-align:center;
    margin-bottom:20px;
    font-weight:600;
}

.form-section{
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,0.05);
    margin-bottom:20px;
}

.form-control{
    border-radius:8px;
}

.btn{
    border-radius:8px;
    padding:6px 15px;
}

.table{
    background:#fff;
    border-radius:10px;
    overflow:hidden;
}

.table th{
    background:#2f3640;
    color:white;
    text-align:center;
}

.table td{
    text-align:center;
}

h4{
    margin-bottom:15px;
    font-weight:600;
}

</style>

</head>

<body>

<div class="container mt-5">

<h2>Resort Management System</h2>

<div class="form-section">

<h4>Add Customer</h4>

<form method="post" action="add.php">

<input type="hidden" name="action" value="customer">

<input class="form-control mb-2" name="fn" placeholder="First Name">

<input class="form-control mb-2" name="ln" placeholder="Last Name">

<input class="form-control mb-2" name="email" placeholder="Email">

<input class="form-control mb-2" name="phone" placeholder="Phone">

<input class="form-control mb-2" name="address" placeholder="Address">

<button class="btn btn-primary">Add</button>

</form>

</div>

<div class="form-section">

<h4>Add Service</h4>

<form method="post" action="add.php">

<input type="hidden" name="action" value="service">

<input class="form-control mb-2" name="name" placeholder="Service Name">

<input class="form-control mb-2" name="type" placeholder="Type">

<input class="form-control mb-2" name="price" placeholder="Price">

<input class="form-control mb-2" name="desc" placeholder="Description">

<button class="btn btn-success">Add</button>

</form>

</div>

<div class="form-section">

<h4>Add Order</h4>

<form method="post" action="add.php">

<input type="hidden" name="action" value="order">

<select name="cust" class="form-control mb-2">

<?php while($c=$custList->fetch_assoc()){ ?>

<option value="<?=$c['customer_id']?>">

<?=$c['first_name']?> <?=$c['last_name']?>

</option>

<?php } ?>

</select>

<select name="serv" class="form-control mb-2">

<?php while($s=$servList->fetch_assoc()){ ?>

<option value="<?=$s['service_id']?>">

<?=$s['service_name']?>

</option>

<?php } ?>

</select>

<input class="form-control mb-2" name="qty" placeholder="Quantity">

<input class="form-control mb-2" name="status" placeholder="Status">

<button class="btn btn-warning">Add</button>

</form>

</div>

<div class="form-section">

<h4>Add Payment</h4>

<form method="post" action="add.php">

<input type="hidden" name="action" value="payment">

<select name="order" class="form-control mb-2">

<?php while($o=$orderList->fetch_assoc()){ ?>

<option value="<?=$o['order_id']?>">

Order <?=$o['order_id']?>

</option>

<?php } ?>

</select>

<input type="date" name="date" class="form-control mb-2">

<input type="number" name="amount" class="form-control mb-2" placeholder="Amount">

<input type="text" name="method" class="form-control mb-2" placeholder="Method">

<input type="text" name="status" class="form-control mb-2" placeholder="Status">

<button class="btn btn-info">Add Payment</button>

</form>

</div>

<hr>

<div class="form-section">

<h4>Customers</h4>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Action</th>

</tr>

<?php while($c=$customers->fetch_assoc()){ ?>

<tr>

<td><?=$c['customer_id']?></td>
<td><?=$c['first_name']?></td>
<td><?=$c['last_name']?></td>
<td><?=$c['email']?></td>
<td><?=$c['phone']?></td>
<td><?=$c['address']?></td>

<td>

<a href="delete.php?table=customers&field=customer_id&id=<?=$c['customer_id']?>" class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<div class="form-section">

<h4>Services</h4>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Name</th>
<th>Type</th>
<th>Price</th>
<th>Description</th>
<th>Action</th>

</tr>

<?php while($s=$services->fetch_assoc()){ ?>

<tr>

<td><?=$s['service_id']?></td>
<td><?=$s['service_name']?></td>
<td><?=$s['service_type']?></td>
<td><?=$s['price']?></td>
<td><?=$s['description']?></td>

<td>

<a href="delete.php?table=services&field=service_id&id=<?=$s['service_id']?>" class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<div class="form-section">

<h4>Orders</h4>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Customer</th>
<th>Service</th>
<th>Quantity</th>
<th>Total</th>
<th>Status</th>
<th>Action</th>

</tr>

<?php while($o=$orders->fetch_assoc()){ ?>

<tr>

<td><?=$o['order_id']?></td>
<td><?=$o['first_name']?></td>
<td><?=$o['service_name']?></td>
<td><?=$o['quantity']?></td>
<td><?=$o['total_price']?></td>
<td><?=$o['status']?></td>

<td>

<a href="delete.php?table=orders&field=order_id&id=<?=$o['order_id']?>" class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<div class="form-section">

<h4>Payments</h4>

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Order</th>
<th>Customer</th>
<th>Amount</th>
<th>Status</th>
<th>Action</th>

</tr>

<?php while($p=$payments->fetch_assoc()){ ?>

<tr>

<td><?=$p['payment_id']?></td>
<td><?=$p['order_id']?></td>
<td><?=$p['first_name']?></td>
<td><?=$p['amount']?></td>
<td><?=$p['status']?></td>

<td>

<a href="delete.php?table=payments&field=payment_id&id=<?=$p['payment_id']?>" class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>

</html>