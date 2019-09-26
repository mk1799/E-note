<?php
session_start();
include_once 'inc/123.php';
include_once 'inc/head.php';
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
    background: url(p2.jpg);
    background-size: cover;
  }

  
  .con {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  height: 470px;
  padding: 10px;
 background: rgba(200,200, 200, 0.6);
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

.con .row input[type="submit"]
{
background-color: rgba(0,0,0,.9); 
 width: 50%;
  border: 2px solid green;
  outline: none;
  color: skyblue;
  font-weight: bold;
  font-size: 25px;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; 
}
.con .row input
{
background-color: rgba(0,0,0,.8); 
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
h2{

color:rgb(0,0,77);
font-size: 20px;
text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
}
p{

color:rgb(0,0,77);
font-size: 20px;
text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
}
</style>
</head>
<body>

   <div class="con">
  <h2>Quick Contact</h2>
<form method="post">
  <div class="row">
    <div class="col-md-8">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><?php echo @$err;?></div>
  </div>
  
  
  
  <div class="row">
    <input type="email" name="e" class="form-control" placeholder="Enter Your Email" /></div>
  
  
  <div class="row"><br>
    <input type="text" name="p" class="form-control" placeholder="Enter Your Mobile" /></div>
  
  
  <div class="row"><br>
    <input type="text" name="m" class="form-control" placeholder="Enter Your Message" /></div>

  
  <div class="row" style="margin-top:10px">
    <input type="submit" value="Send Query" name="save" class="btn btn-success"/>
    
    </div>
    
<br><br>
    <h2>Contact us</h2>
   <p> 
    Mobile: 9687290890<br/>
    Email:mk.team@gmail.com<br/></p>
</div>

</body>
</html> 


<?php

if(isset($save)){
  if($e=="" || $p==""  || $m=="")
  {
  $err="<font color='white'>fill all the fileds first</font>"; 

  }
  else
  {
    $sql = "INSERT INTO cont(email,mob,msg) VALUES ('$e','$p','$m')";
  if($conn->query($sql) === TRUE) {
    echo "<p>Successfully Submitted</p>";
    $err="<font color='white'>Notice added Successfully</font>";

  } else {
    echo "Error " . $sql . ' ' . $conn->connect_error;
  }

  $conn->close();
    $err="<font color='white'>Added Successfully</font>";  
  }
}
?>