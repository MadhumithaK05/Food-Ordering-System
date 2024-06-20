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
.Frame1{
	width: 419px; 
	height: 158px; 
	position: relative; 
	background: rgba(38.25, 20.72, 30.19, 0.50); 
	border-radius: 15px; 
	overflow: hidden;
}
.Frame1 img{
	width: 144px; 
	height: 97px; 
	left: 258px; 
	top: 21px; 
	position: absolute;
}
.IName{
	left: 15px; 
	top: 14px; 
	position: absolute; 
	text-align: center; 
	color: white; 
	font-size: 25px; 
	font-weight: 400; 
	word-wrap: break-word;
}
.Rs{
	left: 15px; 
	top: 67px; 
	position: absolute; 
	text-align: center; 
	color: white; 
	font-size: 25px; 
	font-weight: 400; 
	word-wrap: break-word
}
.insbtn{
    padding-left: 9px; 
	padding-right: 9px; 
	right: 15px; 
	top: 110px; 
	position: absolute; 
	background: white; 
	border-radius: 10px; 
	overflow: hidden; 
	justify-content: center; 
	align-items: center; 
	display: inline-flex;
}
.insbtn a{
	text-align: center; 
	color: black; 
	font-size: 21px; 
	font-weight: 400; 
	word-wrap: break-word;
}
.add{
	padding-left: 9px; 
	padding-right: 8px; 
	left: 263px; 
	top: 103px; 
	position: absolute; 
	background: white; 
	border-radius: 10px; 
	overflow: hidden; 
	justify-content: center; 
	align-items: center; 
	display: inline-flex;
}
.add a{
	text-align: center; 
	color: black; 
	font-size: 21px; 
	font-weight: 400; 
	word-wrap: break-word;
}
.del{
	padding-left: 9px; 
	padding-right: 8px; 
	left: 323px; 
	top: 103px; 
	position: absolute; 
	background: white; 
	border-radius: 10px; 
	overflow: hidden; 
	justify-content: center; 
	align-items: center; 
	display: inline-flex;
}
.del a{
	text-align: center; 
	color: black; 
	font-size: 21px; 
	font-weight: 400; 
	word-wrap: break-word;
}
</style>
<?php
include("conn.php");

$s1="select * from menu where recom=1";
$r1=mysqli_query($conn,$s1);
$d1=mysqli_num_rows($r1);

$s2="select * from menu where type like '%Soup%'";
$r2=mysqli_query($conn,$s2);
$d2=mysqli_num_rows($r2);

$s3="select * from menu where type like '%Starter%'";
$r3=mysqli_query($conn,$s3);
$d3=mysqli_num_rows($r3);

$s4="select * from menu where type like '%Gravy%'";
$r4=mysqli_query($conn,$s4);
$d4=mysqli_num_rows($r4);

$s5="select * from menu where type like '%Bread%'";
$r5=mysqli_query($conn,$s5);
$d5=mysqli_num_rows($r5);

$s6="select * from menu where type like '%Rice%'";
$r6=mysqli_query($conn,$s6);
$d6=mysqli_num_rows($r6);

$s7="select * from menu where type like '%Thali%'";
$r7=mysqli_query($conn,$s7);
$d7=mysqli_num_rows($r7);

$s8="select * from menu where type like '%Raita%'";
$r8=mysqli_query($conn,$s8);
$d8=mysqli_num_rows($r8);

$s9="select * from menu where type like '%Dessert%'";
$r9=mysqli_query($conn,$s9);
$d9=mysqli_num_rows($r9);

$s10="select * from menu where type like '%Beverage%'";
$r10=mysqli_query($conn,$s10);
$d10=mysqli_num_rows($r10);

$s11="select * from menu where type like '%Chat%'";
$r11=mysqli_query($conn,$s11);
$d11=mysqli_num_rows($r11);
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
<div class="d-flex">
<div class="Frame10" style="width: 225px; height: 617px; position: relative; left: 30px;">
  <div class="Menu" style="left: 0px; top: 0px; position: absolute; text-align: center; font-size: 40px; font-weight: 400; word-wrap: break-word">Menu</div>
  <div class="Recommended" style="left: 12px; top: 64px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m1" style="color: white;">Recommended</a></div>
  <div class="Starters" style="left: 12px; top: 160px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m3" style="color: white;">Starters</a></div>
  <div class="Gravy" style="left: 12px; top: 208px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m4" style="color: white;">Gravy</a></div>
  <div class="Breads" style="left: 12px; top: 256px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m5" style="color: white;">Indian Breads</a></div>
  <div class="Rice" style="left: 12px; top: 304px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m6" style="color: white;">Rice</a></div>
  <div class="Thalli" style="left: 12px; top: 352px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m7" style="color: white;">Thali</a></div>
  <div class="Soup" style="left: 12px; top: 112px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m2" style="color: white;">Soup</a></div>
  <div class="Desserts" style="left: 12px; top: 448px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m9" style="color: white;">Desserts</a></div>
  <div class="Raita" style="left: 12px; top: 400px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m8" style="color: white;">Raita</a></div>
  <div class="Chat" style="left: 12px; top: 550px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m11" style="color: white;">Chat</a></div>
  <div class="Beverages" style="left: 12px; top: 502px; position: absolute; text-align: center; font-size: 30px; font-weight: 400; word-wrap: break-word"><a href="#m10" style="color: white;">Beverages</a></div>
</div>
<div class="insbtn">
    <a href="insmenu.php">Insert</a>
</div>
<div style="width : 900px; height: 591px; padding-left: 40px; padding-top: 30px; overflow: scroll; ">
	<section id="m1"><p>Recommended</p>
    <?php
    if($d1){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d1;$i+=2){
            if($row1=mysqli_fetch_array($r1)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r1)){
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m2">
		<p>Soup</p>
        <?php
    if($d2){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d2;$i+=2){
            if($row1=mysqli_fetch_array($r2)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r2)){
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
<section id="m3">
		<p>Starters</p>
		<?php
    if($d3){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d3;$i+=2){
            if($row1=mysqli_fetch_array($r3)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r3)){
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m4">
	<p>Gravy</p>
	<?php
    if($d4){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d4;$i+=2){
            if($row1=mysqli_fetch_array($r4)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r4)){
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m5">
		<p>Indian Breads</p>
		<?php
    if($d5){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d5;$i+=2){
            if($row1=mysqli_fetch_array($r5)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r5)){
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
		</section>
	<section id="m6">
		<p>Rice</p>
		<?php
    if($d6){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d6;$i+=2){
            if($row1=mysqli_fetch_array($r6)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r6)) {
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m7">
	<p>Thali</p>
	<?php
    if($d7){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d7;$i+=2){
            if($row1=mysqli_fetch_array($r7)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r7)) {
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m8">
	<p>Raita</p>
	<?php
    if($d8){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d8;$i+=2){
            if($row1=mysqli_fetch_array($r8)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r8)) {
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m9">
	<p>Desserts</p>
	<?php
    if($d9){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d9;$i+=2){
            if($row1=mysqli_fetch_array($r9)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r9)) {
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m10">
	<p>Beverages</p>
	<?php
    if($d10){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d10;$i+=2){
            if($row1=mysqli_fetch_array($r10)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r10)){
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>
	<section id="m11">
	<p>Chat</p>
	<?php
    if($d11){
    ?>
	<table>
    <?php
          for($i =1;$i<=$d11;$i+=2){
            if($row1=mysqli_fetch_array($r11)) {
            ?>
		<tr>
			<td>
			<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>

			</td>
			<?php
			if($row1=mysqli_fetch_array($r11)){
				?>
			<td>
				
				<div class="Frame1">
  <img class="rounded" src="bg.jpg" />
  <div class="IName"><?php echo $row1['iname']; ?></div>
  <div class="Rs">&#8377;<?php echo $row1['rs']; ?></div>
  <?php $a=$row1['ino']; ?>
  <div class="add">
    <?php echo "<a href='editmenu.php?iid=$a'>Edit</a>" ?>
  </div>
  <div class="del">
    <?php echo "<a href='delmenu.php?iid=$a'>Delete</a>" ?>
  </div>
</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php
			}
		}
        ?>
	</table>
	<?php
        }
        ?>
	</section>

</div>
</div>
</body>
</html>