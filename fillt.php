<?php
$year=$_POST['year'];
$sem=$_POST['sem'];
$class=$_POST['class'];
$flag1=0;
$conn=new mysqli("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    else
    {
        $sql2="select count(*) from alloctable where class ='$class' and year='$year' and sem='$sem'";
            $res2=$conn->query($sql2);
            $result2=$res2->fetch_assoc();
            if(!($result2['count(*)']>0)){
        for($x=1,$y=51;$x<31;$x++,$y++)
        {
            $subs=$_POST[$y];
            if($year!="" && $sem!="" && $class!=""){
        $sql1="insert into alloctable values('$year','$sem','$class',(select time from schedule where timeid='$x'),
                 (select day from schedule where timeid='$x'),'$subs',(select fname from fopt where year='$year' and sem=$sem and $class='$class' and sub='$subs'))";
            $conn->query($sql1);}
            else
            {
                $flag1++;
            }
               
        }
        if($flag1!=0){
                echo "please select year,sem,section";
            }
            else {
            echo"values inserted for".$class;}
            }
            else 
            {
                echo"values already inserted for".$class;
            }
          
        include 'fillt.html';
    }
?>