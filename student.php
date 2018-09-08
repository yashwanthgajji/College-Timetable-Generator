<?php
$year=$_GET['year'];
$sem=$_GET['sem'];
$class=$_GET['class'];
$conn= new mysqli("localhost:3306","root","2000","sharath");
    if($connconnect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {  echo "<center>";
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
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
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
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
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
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
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
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
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
                echo "<td>";
                echo $result['sname'];
                echo "</td>";
            }
        }
        echo "</tr>";
        echo "</table>";echo "</center>";
    }
?>