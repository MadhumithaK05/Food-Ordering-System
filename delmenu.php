<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<title>Menus</title>
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
p{
	font-size: 30px;
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
<a class="nav-link" href="adminorder.php" style="color: white; font-size: 25px;">Orders</a> </li>
<li class="nav-item">
<a class="nav-link" href="adminmenu.php" style="color: white; font-size: 25px;">Menus</a>
</li>
</ul>
</nav>
<?php
include("conn.php");
$eid=$_GET['iid'];
$res=mysqli_query($conn,"delete from menu where ino=$eid"); 
if($res!=0)
{
echo "<h2>Deleted successfully.</h2>"; 
}
else{
echo "Unsuccessful Deletion.";
}

?>