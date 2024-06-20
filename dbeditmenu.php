<?php
    include 'conn.php';
    if(isset($_POST['edt']))
    {   
        $i=$_POST['ino'];
        $pn=$_POST['iname'];
        $ptype=$_POST['itype'];
        $recom=$_POST['rec'];
        if($recom!= 1){
            $recom=0;
        }
        $price=$_POST['iprice'];
        $image=$_FILES['iimg']['name'];
        $tmp_name=$_FILES['iimg']['tmp_name'];
        $destination="images/".$image;
        move_uploaded_file($tmp_name,$destination);

        $edit="update menu set iname='$pn', type='$ptype',recom='$recom',img='$image',rs='$price' where ino=$i";
        $edit_q=mysqli_query($conn,$edit);
        echo "<script>alert('edited Successfully')</script>";
           
    }
?>
            