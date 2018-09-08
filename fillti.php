<?php
$q = $_GET['q'];
$r = $_GET['r'];
$t=$_GET['t'];
$conn= mysqli_connect("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    else {
       
        $query2="select sname from subject where sid=any(select sid from yearsubject where year='$q' and sem='$r')";
    $result2=mysqli_query($conn,$query2);
    if($result2->num_rows)
    {
        while($row=$result2->fetch_assoc())
        {
            echo "<option>".$row['sname']."</option>";
        }
    }
    else
    {
        echo "<option>novalues</option>";
    
    }
    }
    

?>