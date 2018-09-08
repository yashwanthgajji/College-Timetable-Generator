<?php
$year=$_POST['year'];
$sem=$_POST['sem'];
$class=$_POST['class'];
$xid=1;
$yid=101;
$conn=new mysqli("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    else
    {
       echo "<center>";echo "<form action='edit1.php' method='POST'>";
        echo "time table for B.E-";echo $year; echo "/4";echo "\tsem-";echo $sem; echo "\tsection";echo $class;
        echo "<table border='2' >";
        echo "<tr>
				<th>DAY</th>
				<th>09:40-10:40</th>
				<th>10:40-11:40</th>
				<th>11:40-12:40</th>
				
				<th>01:20-02:20</th>
				<th>02:20-03:20</th>
				<th>02:20-04:20</th>
			</tr>";
        echo "<tr>";
        echo "<td>";
        echo "MONDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='monday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td><input type='text' id='$xid' name='$xid' value='";
                echo $result['sname'];
                echo "' readonly>";
                echo "<select name='$yid' id='$yid' onchange='call($xid)'>";
                echo "<option value=''>select subject</option>";
                $query2="select sname from subject where sid=any(select sid from yearsubject where year='$year' and sem='$sem')";
    $result2=mysqli_query($conn,$query2);
    if($result2->num_rows)
    {
        while($row=$result2->fetch_assoc())
        {
            echo "<option value=".$row['sname'].">".$row['sname']."</option>";
        }
    }
                 echo "</select></td>";
                 $xid++;$yid++;
            }
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "TUESDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='tuesday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td><input type='text' id='$xid' name='$xid' value='";
                echo $result['sname'];
                echo "' readonly>";
                echo "<select name='$yid' id='$yid' onchange='call($xid)'>";
                echo "<option value=''>select subject</option>";
                $query2="select sname from subject where sid=any(select sid from yearsubject where year='$year' and sem='$sem')";
    $result2=mysqli_query($conn,$query2);
    if($result2->num_rows)
    {
        while($row=$result2->fetch_assoc())
        {
            echo "<option value=".$row['sname'].">".$row['sname']."</option>";
        }
    }
                 echo "</select></td>"; $xid++;$yid++;
            }
        }
        echo "<tr>";
        echo "<td>";
        echo "WEDNESDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='wednesday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td><input type='text' id='$xid' name='$xid' value='";
                echo $result['sname'];
                echo "' readonly>";
                echo "<select name='$yid' id='$yid' onchange='call($xid)'>";
                echo "<option value=''>select subject</option>";
                $query2="select sname from subject where sid=any(select sid from yearsubject where year='$year' and sem='$sem')";
    $result2=mysqli_query($conn,$query2);
    if($result2->num_rows)
    {
        while($row=$result2->fetch_assoc())
        {
            echo "<option value=".$row['sname'].">".$row['sname']."</option>";
        }
    }
                 echo "</select></td>"; $xid++;$yid++;
            }
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "ThURSDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='thursday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td><input type='text' id='$xid' name='$xid' value='";
                echo $result['sname'];
                echo "' readonly>";
                echo "<select name='$yid' id='$yid' onchange='call($xid)'>";
                echo "<option value=''>select subject</option>";
                $query2="select sname from subject where sid=any(select sid from yearsubject where year='$year' and sem='$sem')";
    $result2=mysqli_query($conn,$query2);
    if($result2->num_rows)
    {
        while($row=$result2->fetch_assoc())
        {
           echo "<option value=".$row['sname'].">".$row['sname']."</option>";
        }
    }
                 echo "</select></td>"; $xid++;$yid++;
            }
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "FRIDAY";
        echo "</td>";
        $sql="select sname from alloctable where year='$year' and class='$class' and sem='$sem' and day='friday'";
        $res=$conn->query($sql);
        if($res->num_rows)
        {
            while($result=$res->fetch_assoc())
            {
                echo "<td><input type='text' id='$xid' name='$xid' value='";
                echo $result['sname'];
                echo "' readonly>";
                echo "<select name='$yid' id='$yid' onchange='call($xid)'>";
                echo "<option value=''>select subject</option>";
                $query2="select sname from subject where sid=any(select sid from yearsubject where year='$year' and sem='$sem')";
    $result2=mysqli_query($conn,$query2);
    if($result2->num_rows)
    {
        while($row=$result2->fetch_assoc())
        {
            echo "<option value=".$row['sname'].">".$row['sname']."</option>";
        }
    }
                 echo "</select></td>"; $xid++;$yid++;
            }
        }
        echo "</tr>";
        echo "</table>";
         echo "<input type='submit' value='save changes'>";
         echo "<input type='hidden' name='year' value='$year'>";
         echo "<input type='hidden' name='sem' value='$sem'>";
         echo "<input type='hidden' name='class' value='$class'>";
         echo "</form>";
        echo "</center>";
    }
?>
<script>
function call(n)
{
    var u=document.getElementById(n+100);
    var l= u.options[u.selectedIndex].value;
    document.getElementById(n).value=l;
}
</script>

