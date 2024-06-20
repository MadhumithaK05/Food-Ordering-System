<?php 
include("dbinsmenu.php");
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
<title>Insert Menu</title>
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
.f1{
    border-radius: 15px; 
    position: absolute; 
    background-color: rgba(38,21,30,.5); 
    width: fit-content; 
    height: fit-content;  
    align-items: center;
    left: 33%;
    top: 24%; 
    padding: 30px 0px 30px 50px;
}
table{
	font-size: 18px;
}
input[type=submit]{
	background-color: rgba(0,0,0,0.5);
	color: white;
	border: none;
	width: 70%;
	border-radius: 20px;
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
<a class="nav-link" href="adminmenu.php" style="color: white; font-size: 25px;">Menu</a>
</li>
</ul>
</nav>
<?php
include("conn.php") ;
?>
<div class="f1">
<form action="" method="post">
<h2>Insert Menu</h2>
<br>
    <table>
        <tr>
            <td><label>Item Name : </label></td>
            <td><input type="text" name="iname"></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td><label>Item Type : </label></td>
            <td><select name="itype">
                <option value="Soup">Soup</option>
                <option value="Starter">Starter</option>
                <option value="Gravy">Gravy</option>
                <option value="Bread">Indian Bread</option>
                <option value="Rice">Rice</option>
                <option value="Thali">Thali</option>
                <option value="Raita">Raita</option>
                <option value="Dessert">Dessert</option>
                <option value="Beverage">Beverage</option>
                <option value="Chat">Chat</option>
            </select></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td colspan="2"><input type="checkbox" name="rec" value="Recom">&ensp;Recommended</td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td>Price : </td>
            <td><input type="text" name="iprice"></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td>Image : </td>
            <td><input type="file" name="iimg"></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td></td>
        <td style="text-align: right;"><input type="submit" name="ins" value="Insert">&emsp;&emsp;</td>
        </tr>
    </table>
</form>
</div>
</body>
</html>