<?php
$q = $_GET['q'];
$r = $_GET['r'];
$t=$_GET['t'];
$conn= mysqli_connect("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    $query="select sname from alloctable where year='$q' and sem='$r' and class='$t'";
    $result=mysqli_query($conn,$query);
    if($result->num_rows)
    {
        while($row=$result->fetch_assoc())
        {
            echo $row['sname'];
        }
    }
    else
    {
        echo novalues;
    }

?>