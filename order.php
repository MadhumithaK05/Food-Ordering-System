<?php 
include("conn.php");
session_start();
$user_id = $_SESSION["uid"];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<title>Order</title>
<style>
	body{
		background-image: url(bg2.png);
		background-repeat: no-repeat;
  		background-attachment: fixed; 
  		background-size: cover;
  		color: white;
  		font-family: 'Jomolhari';
	}
	a:link {
  background-color: transparent; 
  text-decoration: none;
}
#con {
	background-color: rgba(0,0,0,0.5);
	color: white;
	border: none;
	width: 100%;
	border-radius: 20px;
}
input[type=submit]{
	background: none;
	color: white;
	border: none;
	width: 100%;
	border-radius: 10px;
}
input[type=text], input[type=password]{
	background-color: rgba(0,0,0,0.5);
	color: white;
	border-radius: 5px;
}
#pro table, #pro th, #pro td{
	border: 1px solid white;
	border-collapse: collapse;
	font-size: large;
	text-align: center;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark justify-content-between">
	<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="#" style="color: white; font-size: 40px;">Spicy Bites</a>
</li>
	</ul>
	
	<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="menu.php" style="color: white; font-size: 25px;">Menus</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php" style="color: white; font-size: 25px;">Contact</a>
</li>
<li class="nav-item">
<a class="nav-link" href="order.php" style="padding-right: 25px; color:  white; font-size: 25px;">Order</a>
</li>
<li class="nav-item">
<a class="nav-link" href="logout.php" style="color: white; font-size: 25px;">Logout</a>
</li>
</ul>
</nav>
<form method='post' action='checkout.php'>
<div style="position: absolute; top: 130px; left: 40px; padding:2% 2% 2% 2%; background-color: rgba(38.25, 20.72, 30.19, 0.50); width: fit-content; border-radius:15px;">
	<table>
		<tr>
			<td>Address: </td>
			<td><input type='text' name="ad" value=""></td>
		</tr>
		<tr>
			<td>Phone No.</td>
			<td><input type='text' value="<?php echo $_SESSION['ph'];?>"></td>
		</tr>
	</table>
<br>
<table id="pro">
	<tr>
	<th style="width: 40%;">Item Name</th>
	<th style="width: 20%;">Quantity</th>
	<th style="width: 15%;">Price</th>
	<th></th>
	</tr>
<?php
$tot=0;
// Retrieve and display the user's cart items
$query = "SELECT * FROM cart WHERE uid = $user_id";
$result = mysqli_query($conn, $query);
$n=mysqli_num_rows($result);
for($i =1;$i<=$n;$i++) {
	if($cart_items =  mysqli_fetch_array($result)) {
		$product_id = $cart_items["pid"];
	$query1 = "SELECT * FROM menu WHERE ino = $product_id";
	$result1 = mysqli_query($conn, $query1);
	$product= mysqli_fetch_assoc($result1);
	?>
	<tr>
    <td><?php echo $product['iname']?></td>
    <td><?php echo $cart_items['quantity'] ?></td>
    <td><?php echo $product['rs'] * $cart_items['quantity'] ?></td>
	<?php
	$tot=$tot+($product['rs'] * $cart_items['quantity']);
	$_SESSION['tot']=$tot;
	?>
    <form method='post' action='remove_from_cart.php'>
    <input type='hidden' name='item_id' value='<?php echo $cart_items['pid'] ?>'>
    <td><input type='submit' name='rem' value='Remove from Cart' onclick="remove_from_cart.php"></td>
    </form>
	</tr>
	<?php
}
}
?>
</table>


</div>
<div style="position: absolute; top: 130px; left: 740px; padding:2% 2% 2% 2%; background-color: rgba(38.25, 20.72, 30.19, 0.50); width: fit-content; border-radius:15px;">
<h3>Bill Details</h3>
<br>
<table>
	<tr><td >Item Total</td>
		<td style="width: 60%; text-align: right;"><?php echo $tot; ?></td>
	</tr>
	<tr colspan=2><td><br></td></tr>
	<tr>
		<td>delivery Charge</td>
		<td style="width: 60%; text-align: right;">30</td>
	</tr>
	<tr colspan=2><td><br></td></tr>
	<tr colspan=2 ><td><br></td><t d</tr>
	<tr style="border-top: 1px solid ;">
		<td>To Pay</td>
		<td style="width: 60%; text-align: right;"><?php echo $tot+30; ?></td>
	</tr>
	<tr colspan=2 style="border-bottom: 1px solid;"><td><br></td></tr>
</tr>
</table>
<br>

<input type='submit' name="con" id='con' value='Order'>

</div>
</form>
</body>
</html>