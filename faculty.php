<?php
include_once 'fac_head.php';
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

.con  [type="submit"]
{
  width: 32%;
  height: 30px;
  background: rgba(10,0,0,.6);
  color: rgba(355,187,513,.8);
  border: 2px solid rgba(355,187,513,.8);
    font-size: 15px;
  
  font-weight: bold;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; }

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
    background: rgba(0,0,0,0.7);
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
$q=mysqli_query($connect,"select * from lea_app");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Application!!!</h2>";
}
else
{
?>

<h1 align="center">All Application</h1>

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
    echo "<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Name:";
          echo $row['name'];
          echo "</td></tr>";
          
          echo "</table>";
          echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pen No.:".$row['sub']."</th>";
        echo "</tr>"; 
  echo "<td ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Duration:</b>".$row['date']."</td>";
    echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr><td>Application:</b>".$row['app']."</td>";
    echo "<tr><td><form action='confirm.php' method='post'> <input type='radio' name='radio' value='yes'>Approve";
    echo "&nbsp;&nbsp;&nbsp;<input type='radio' name='radio' value='yes'>Dissmiss&nbsp;&nbsp;&nbsp;<input type='submit'></form></td></tr>";
    echo "<br>";
$i++;
}
}
$_SESSION['pen']=$row['sub'];
?>
   </tr> 
</table>

</div>

</body>
</html> 
