<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(p1.jpg);
    background-size: cover;
  }


.con h1{
  
 color: darkgrey;
  padding: 0px 0;
  font-size: 40px;
  pointer-events: none;
 
  text-align: center;
  text-shadow: 3px solid skyblue;
}

.con  a{
  text-align: center;
  color: white;
   box-shadow: 10px 15px 25px rgba(0,0,0,.5);
   font-size: 20px;
   border-radius: 50px;
}

  
 table,tr{

padding: 10px;    
  }
  .con .table-bordered {
    left: 40%;
     border-left: 10px solid rgba(255,187,51,0.4);
   
    color: rgba(9,0,51,1);
    font-size: 25px;
    background: rgba(255,187,51,0.4);
    border-radius: 10px;
    box-shadow:  10px 15px 25px rgba(0,0,0,.7);
  }

</style>
</head>
<body>
   <div class="con">


<?php

require_once 'admin/admin/123.php';

$q=mysqli_query($connect,"select * from attend");

$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any attendence for You !!!</h2>";
}
else
{
?>
<h1 align="center">All Attendence</h1>


<?php 
$i=1;
$s="  ";
while($row=mysqli_fetch_assoc($q))
{
 
 echo "<table class='table-bordered'>";
 echo "<tr>";
 
    echo "<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PEN: ". $row['pen']."</td>";
       
          echo  "<td style='padding=10px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dot Net:".$row['dot']."</td> ".$s;
          echo $s." <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WT: ".$row['wt']."</td> ";
         
          echo " <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AJ: ".$row['aj']."</td> ";

          echo " <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOC: ".$row['toc']."</td> ";
        echo "</tr>"; 
  
    echo "<br>";
$i++;
}
}

?>


</div>

</body>
</html> 











