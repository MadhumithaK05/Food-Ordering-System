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
  color: white;
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
</ul>
</nav>
<?php
include("conn.php");
if(isset($_POST["uslog"])){
	$phno=$_POST["ph"];
	$psn=$_POST["pass"];
	$sql= "select * from User where phno='$phno'";
    $res=mysqli_query($conn,$sql);
    $acc=mysqli_fetch_array($res);
    if($psn == $acc["password"] && $psn!=null){
		session_start();
		$_SESSION['uid']=$acc["uid"];
		$_SESSION['uname']=$acc['uname'];
		$_SESSION['ph']=$phno;
        header("Location: menu.php");
	}
}
?>
<div style="border-radius: 15px; position: absolute; background-color: rgba(38,21,30,.5); width: fit-content; height: fit-content; left: 60%; top: 36%; padding: 25px 25px 25px 25px;">
	<h1><center>LOGIN</center></h1>
	<br>
	<form action="" method="post">
		<table>
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
				<td colspan="2"><center><input type="submit" name="uslog" value="LOGIN"></center></td>
			</tr>
            <tr>
                <td colspan="2"><a href="signup.php" style="color: darkgoldenrod">Don't have an Account? Signup</a></td>
            </tr>
			<tr>
                <td colspan="2"><a href="adminlogin.php" style="color: darkgoldenrod">Admin?</a></td>
            </tr>
		</table>
		
	</form>
	
</div>
</body>
</html>