<?php
$fid=$_GET["fid"];
$conn= new mysqli("localhost:3306","root","2000","sharath");
    if($connconnect_error)
    {
        die("connection error".$conn->connect_error);
    }
    else
    {   
        echo "<center>";
        echo "schedule for employee with id".$fid;
        echo "<table border='2' >";
        echo "<tr>
                                <th>DAY</th>
				<th>09:40-10:40</th>
				<th>10:40-11:40</th>
				<th>11:40-12:40</th>
				
				<th>01:20-02:20</th>
				<th>02:20-03:20</th>
				<th>03:20-04:20</th>
            </tr>";
        $days=array("monday","tuesday","wednesday","thursday","friday");
        $times=array("9:40-10:40","10:40-11:40","11:40-12:40","1:20-2:20","2:20-3:20","3:20-4:20");
        foreach ($days as $x)  
        {
            echo "<tr>";
            echo "<td>".$x."</td>";
            foreach($times as $y)
            {
                echo "<td>";
                $sql="select year,sem,class,sname from alloctable where fname=(select fname from faculty where fid='$fid') and day='$x' and time='$y'";
                $res=$conn->query($sql);
                if($res->num_rows)
                {
                    while($result=$res->fetch_assoc())
                    {
                        echo "year:";
                        echo $result['year'];echo "</br>sem:";
                        echo $result['sem'];echo "</br>sec:";
                        echo $result['class'];echo "</br>subject:";
                        echo $result['sname'];
                        
                    }
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</form>";
    }   
?>