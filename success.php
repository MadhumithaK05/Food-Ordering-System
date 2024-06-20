<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<title>Ordered Placed</title>
<style>
	body{
		background-image: url(bg.jpg);
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
.confirm{
    text-align: center;
    font-size: 40px;
	border-radius: 15px; 
	position: absolute; 
	background-color: rgba(38,21,30,.5); 
	width: fit-content; 
	height: fit-content; 
	left: 66%; 
	top: 39%; 
	padding: 25px 25px 25px 25px;
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
<div class="confirm">
	Order<br>Placed<br>Successfully
</div>
</body>
</html>