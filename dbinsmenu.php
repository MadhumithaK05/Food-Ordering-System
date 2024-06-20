<?php
    include 'conn.php';
    if(isset($_POST['ins']))
    {   
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

        if(empty($pn) || empty($ptype) || empty($price)){
          echo "<script>alert('Fill All Fileds')</script>";
        }
        else{
        $insert="insert into menu(iname,type,recom,img,rs) values('$pn','$ptype','$recom','$image','$price')";
        $insert_q=mysqli_query($conn,$insert);
        if($insert_q)
        {
          echo "<script>alert('Inserted Successfully')</script>";       
        }
        
        else{
           
          echo "<script>alert('Not Inserted Successfully')</script>";

        }
    }
    }
?>