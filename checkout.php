<?php
include("conn.php");
session_start();
if (isset($_POST['con'])) 
{
    $uid=$_SESSION['uid'];
    $un=$_SESSION['uname'];
    $ph=$_SESSION['ph'];
    $x=$_SESSION['tot'];
    $ad=$_POST['ad'];

    $r1=mysqli_query($conn,"select pid from cart where uid=$uid"); 
    $p=array();
    while($r2=mysqli_fetch_array($r1)){
        array_push($p,$r2["pid"]);
    }
    $arr = implode ( ', ', $p);
    $items="";
    $r3=mysqli_query($conn,"select iname from menu where ino in ($arr)");
    while ($r4=mysqli_fetch_array($r3)){
        $items.=" ".$r4['iname'];
    }
    $r5=mysqli_query($conn,"insert into Orders(name,phno,addr,items,amt) values('$un','$ph','$ad','$items','$x')");
    $r6=mysqli_query($conn,"delete from cart where uid=$uid");
    header("Location: success.php");
}
?>