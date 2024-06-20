<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<title>Orders</title>
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
  color: white; 
  text-decoration: none;
}
input[type=submit]{
	background-color: rgba(0,0,0,0.5);
	color: white;
	border: none;
	width: 20%;
	border-radius: 20px;
}
p{
	font-size: 30px;
}
table,th,td{
    border: 1px solid;
    text-align: center;
}
</style>
<?php
include("conn.php");

$s1="select * from Orders where finished=0";
$r1=mysqli_query($conn,$s1);
$d1=mysqli_num_rows($r1);
?>
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
<a class="nav-link" href="adminorder.php" style="color: white; font-size: 25px;">Orders</a> </li>
<li class="nav-item">
<a class="nav-link" href="adminmenu.php" style="color: white; font-size: 25px;">Menus</a>
</li>
<li class="nav-item">
<a class="nav-link" href="adminlogin.php" style="color: white; font-size: 25px;">Logout</a>
</li>
</ul>
</nav>
<form action="" method="post">
<div style=" padding: 2% 2% 0 2%">
<h2>Orders</h2>
<table>
    <tr>
        <th>Order Id</th>
        <th style="width: 10%;">Name</th>
        <th>Phone No.</th>
        <th style="width: 25%;">address</th>
        <th style="width: 50%;">Order</th>
        <th>Amount</th>
        <th>Completed</th>
    </tr>
    <?php
    if($d1){
          for($i =1;$i<=$d1;$i++){
            if($row1=mysqli_fetch_array($r1)) {
            ?>
    <tr>
        <td><?php echo $row1['oid']; ?></td>
        <td><?php echo $row1['name']; ?></td>
        <td><?php echo $row1['phno']; ?></td>
        <td><?php echo $row1['addr']; ?></td>
        <td><?php echo $row1['items']; ?></td>
        <td>&#8377;<?php echo $row1['amt']; ?></td>
        <td><input type="checkbox" name="comp" value="1"></td>
        <td><input type="hidden" name="ido" value="<?php echo $row1['oid']; ?>" hidden></td>
    </tr>
    <?php
            }
			}
		}
        ?>
</table>
<br>
<input type="submit" name="updfin" value="Update" style="float: right;">
</div>
</form>
<?php 
    if(isset($_POST['updfin'])){
        $oi=$_POST['ido'];
        $c=$_POST['comp'];
        $r=mysqli_query($conn,"update Orders set finished=1 where oid='$oi'");
    }
?>
</body>
</html>