<?php
session_start();
$n=$_SESSION['un'];
$_SESSION['un']=$n;
include_once 'inc/header.php';


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
    background: url(p3.jpg);
    background-size: cover;
  }

  
  .con {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  height: 350px;
  padding: 20px;
 background: rgba(0, 0, 0, 0.6);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  text-align: center;
  }

.con h1{
  
 color: skyblue;
  padding: 0px 0;
  font-size: 40px;
  pointer-events: none;
 
  text-align: center;
  text-shadow: 3px solid skyblue;
}

.con  button[type="submit"]
{
background-color: rgba(100,40,40,.9); 
 width: 87%;
  border: 2px solid skyblue;
  outline: none;
  color: skyblue;
  font-weight: bold;
  font-size: 25px;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; 
}
.con .up input[type="password"]
{
background-color: rgba(100,40,40,.9); 
 width: 87%;
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
</style>
</head>
<body>
   <div class="con">

    <form action="notice.php" method="POST"><button type="submit"  name="notice">Notice</button><br><br><br></form>
        <form action="schedule.php" method="POST"><button type="submit" name="schedule">Schedule</button><br><br><br></form>

       <form action="dis_attend.php" method="POST"> <button type="submit" name="attendence">Attendence</button><br><br><br></form>
    
        <form action="fees.php" method="POST"><button type="submit" name="fees">Fees,Bookbank</button><br><br><br></form>
    
    
</div>

</body>
</html> 
