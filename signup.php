<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<title>Login</title>
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
table{
	font-size: 18px;
}
input[type=submit]{
	background-color: rgba(0,0,0,0.5);
	color: white;
	border: none;
	width: 50%;
	border-radius: 20px;
}
input[type=text], input[type=password]{
	background-color: rgba(0,0,0,0.5);
	color: white;
	border-radius: 5px;
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
<a class="nav-link" href="Home.html" style="color: white; font-size: 25px;">Home</a> </li>
<li class="nav-item">
<a class="nav-link" href="signin.php" style="padding-right: 25px; color:  white; font-size: 25px;">Login</a>
</li>
</ul>
</nav>
<?php
include("conn.php");
if(isset($_POST["signup"])){
	$un=$_POST["uname"];
	$phn=$_POST["ph"];
	$psn=$_POST["pass"];
	$cpsn=$_POST["conpsn"];
	if($psn == $cpsn){
	$sql= "insert into User(uname,phno,password) values('$un','$phn','$psn')";
    $res=mysqli_query($conn,$sql);
    header("Location: signin.php");
	}
}
?>
<div style="border-radius: 15px; position: absolute; background-color: rgba(38,21,30,.5); width: fit-content; height: fit-content; left: 58%; top: 30%; padding: 25px 25px 25px 25px;">
	<h1><center>Signup</center></h1>
	<br>
	<form action="" method="post">
		<table>
            <tr>
                <td>Name:</td>
				<td><input type="text" name="uname"></td>
            </tr>
            <tr>
				<td><br></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="text" name="ph"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
            <tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="conpsn"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="signup" value="Signup"></center></td>
			</tr>
			<tr>
                <td colspan="2"><a href="signin.php" style="color: darkgoldenrod">Have Account? Login</a></td>
            </tr>
		</table>
		
	</form>
	
</div>
</body>
</html>