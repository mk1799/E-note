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
 
}


.note{
  left: 30%;
  right: 10%;
}
  
 .con .table tr{
   left: 30%;
   border-style: dotted;
    background-color: rgba(100,100,110,0.4) !important;
    border: 2px solid #ddd !important;
    
  }
  .con .table-bordered {
    left: 40%;
     border-left: 10px solid rgba(255,187,51,0.4);
 
    color: rgba(9,0,51,1);
    font-size: 20px;
    background: rgba(255,187,51,0.4);
    border-radius: 10px;
    box-shadow:  10px 15px 25px rgba(0,0,0,.7);
  }
</style>
</head>
<body>
   <div class="con">



<?php
session_start(); 
require_once 'admin/admin/123.php';

$q=mysqli_query($connect,"select * from dead");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>

<h1 align="center">All Notification</h1>


<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{
 echo "<div class='note'>"; 
 echo "<table class='table-bordered'>";
 echo "<tr>";
   echo "<th><table> <tr>"; 
    echo "<td align='center'>Date:";
          echo $row['date'];
          echo "</td></tr>";
          echo "<tr>";
          echo  "<td>DeadLine:".$row['lastd']."</td>";
          echo "</tr>";
          
          echo "Posted By:".$row['poster']."</th>";
        echo "</tr>"; 
  echo "<td >".$row['notice']."</td>";
echo "</tr>";
    echo "<br>";
    echo "</table>";
    echo "</div>";
$i++;
}
}
?>

</div>

</body>
</html> 
