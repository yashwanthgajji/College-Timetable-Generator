<?php
$q = $_GET['q'];
$yearid=1;
$semid=501;
$classid=1001;
$divid=2001;
$facid=4001;
$conn= mysqli_connect("localhost:3306","root","2000","sharath");
    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
    $query1="select count(*) from faculty where fdept='$q'";
    $result1=mysqli_query($conn,$query1);
    $query2="select fname from faculty where fdept='$q'";
    $result2=mysqli_query($conn,$query2);
    
    if($result1->num_rows)
    {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>FACULTY NAME</th>
            <th>SUBJECT 1</th>
            <th>SUBJECT 2</th>
            <th>SUBJECT 3</th>
            <th>SUBJECT 4</th>
            <th>SUBJECT 5</th>
            ";
        echo "</tr>";
            for($x=0;$x<$result1->fetch_assoc();$x++)
            {
                if($result2->num_rows)
                {
                    while($res2=$result2->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo "<input type='text' name ='$facid' value='".$res2['fname']."' readonly>";
                        echo "</td>";
                        for($i=1;$i<6;$i++)
                        {
                            echo "<td>";
                            echo "<select id='$yearid' name='$yearid' onchange='ycall1($divid)'>";                            
                            echo "<option value='' id='$yearid'>select year</option>";
                            echo "<option value='1' id='$yearid'>year 1</option>";
                            echo "<option value='2' id='$yearid'>year 2</option>";
                            echo "</select>";
                            echo "<select id='";echo $semid;echo "' name=";echo $semid;echo " onchange='ycall1($divid)'>";                          
                            echo "<option value='' id='$semid'>select sem</option>";
                            echo "<option value='1' id='$semid'>sem 1</option>";
                            echo "<option value='2' id='$semid'>sem 2</option>";
                            echo "</select>";
                            echo "<select id='";echo $classid;echo "' name=";echo $classid;echo ">";                            
                            echo "<option value=''>select class</option>";
                            echo "<option value='C1'>C1</option>";
                            echo "<option value='C2'>C2</option>";
                            echo "</select>";
                            echo "<div id='$divid'>";echo "</div>";
                            echo "</td>";
                            $yearid++;
                            $semid++;
                            $classid++;
                            $divid++;
                            $facid++;

                        }
                        echo "<tr>";
                    }
                }
                
            }
        echo "</table>";
    }
?>