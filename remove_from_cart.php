<?php
include("conn.php");
session_start();
if (isset($_POST['rem'])) {
$uid=$_SESSION['uid'];
$iid=$_POST["item_id"];
$res=mysqli_query($conn,"delete from cart where pid=$iid and uid=$uid"); 
header("location : order.php");
}
?>