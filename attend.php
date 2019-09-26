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

.box {
  
  position: absolute;
  top: 50%;
  left: 50%;
   border: 0;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.7);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 50px;

  }
.con h1{
  
 color: darkgrey;
  padding: 0px 0;
  font-size: 40px;
  pointer-events: none;
 
  text-align: center;
  text-shadow: 3px solid skyblue;
}

.con input[type="submit"]
{
background-color: rgba(0,0,0,.9); 
text-align:center;
align-items: center;
 width: 80%;
  border: 2px solid green;

  color: skyblue;
  font-weight: bold;
  font-size: 25px;
  padding: 10px 10px;
  cursor: pointer;
  border-radius: 5px;
   
}
.con input[type="text"]
{
background-color: rgba(100,40,40,.9); 
 width: 88%;
  border: 2px solid skyblue;
  outline: none;
  color: #fff;
  font-size: 18px;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; 
}
.con  a{
  text-align: center;
  color: white;
   box-shadow: 10px 15px 25px rgba(0,0,0,.5);
   font-size: 20px;
   border-radius: 50px;
}

  
 .con .table tr{
    background-color: rgba(100,100,110,0.4) !important;
    border: 2px solid #ddd !important;
    text-align: center;
  }
  .con .table-bordered th,
  .con .table-bordered td {
  align-items: center;
    border: 2px solid #ddd !important;
  }
</style>
</head>
<body>
  <form method="post">
  <div class="box"> 
   <div class="con">
    <br><br><br>
  <input type="text" name="pen" placeholder="Enter your Pen No."><br><br><br>
  <h6 align="center"><input type="submit" value="Get Report" name="submit"></h6>
</div>
</div>



</form>

<?php
require_once 'admin/admin/123.php';
if(isset($submit)){


$q=mysqli_query($connect,"select from attend where pen='$pen'");

$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any attendence for You !!!</h2>";
}
else
{
  $err= ".$rr.";
?>
<br>
<br>
<h1 align="center">All Attendence</h1>

<table class="table">
  <tr>
<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{
 
 echo "<table class='table-bordered'>";
 echo "<tr>";
   echo "<th><table> <tr>"; 
    echo "<td align='center'>Date:";
          echo $row['pen'];
          echo "</td></tr>";
          echo "<tr>";
          echo  "<td>Time:".$row['dot']."</td>";
          echo "</tr>";
          echo "</table>";
          echo "Posted By:".$row['aj']."</th>";
        echo "</tr>"; 
  echo "<td >".$row['wt']."</td>";
    echo "<br>";
$i++;
}
}

}
?>
</body>
</html> 
