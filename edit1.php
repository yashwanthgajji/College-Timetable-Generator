<?php
$year=$_POST['year'];
$sem=$_POST['sem'];
$class=$_POST['class'];
$xid=1;
$days=array("monday","tuesday","wednesday","thursday","friday");
$times=array("9:40-10:40","10:40-11:40","11:40-12:40","1:20-2:20","2:20-3:20","3:20-4:20");
$conn=new mysqli("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    else
    {
       foreach ($days as $x)  
        {
            foreach($times as $y)
            {
                $sql="update alloctable set sname='$_POST[$xid]' where year='$year' and sem='$sem' and class='$class' and day='$x' and time='$y'";
                $conn->query($sql);
               
                $xid++;
            }
        }  
        echo "updated";
       include 'fillt.html';
       }
     
?>