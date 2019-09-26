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
    background: url(p5.jpg);
    background-size: cover;
  }


.con h1{
  
 color: rgb(230,0,115);
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

  
 .con .table{

    text-align: center;
  }
  .con .table-bordered {
    left: 40%;
     border-left: 10px solid rgba(0,0,0,0.4);
 text-align: center;
    color: rgba(355,187,513,1);
    font-size: 20px;
    background: rgba(0,0,0,0.4);
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
$n=$_SESSION['un'];
$q=mysqli_query($connect,"select * from book");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any books!!!</h2>";
}
else
{
?>
<br>
<br>
<h1 align="center">All Books</h1>

<table class="table">
  <tr>
<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{
  echo $n;
 echo "<table class='table-bordered'>";
 echo "<tr>";
   echo "<th><table> <tr>"; 
    echo "<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Book Name:";
          echo $row['bn'];
          echo "</td></tr>";
          
          echo "</table>";
          echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Publication:".$row['pn']."</th>";
        echo "</tr>"; 
  echo "<td ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year Of Edition:</b>".$row['yoe']."</td>";
    echo "<td ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No.:</b>".$row['cn']."</td>";
    echo "<br>";
$i++;
}
}
?>
   </tr> 
</table>

</div>

</body>
</html> 
