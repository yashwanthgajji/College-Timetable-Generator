<?php
$q = $_GET['q'];
$r = $_GET['r'];
$conn= mysqli_connect("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    $query="select sname from subject where sid=any(select sid from yearsubject where year='$q' and sem='$r')";
    $result=mysqli_query($conn,$query);
    if($result->num_rows)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<option value=".$row['sname'].">".$row['sname']."</option>";
        }
    }
    else
    {
        echo "notok";
    }

?>