<?php
session_start();

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
  top: 80%;
  left: 20%;
  transform: translate(-50%,-50%);
  width: 520px;
  height: 215px;
  padding: 5px;
 background: rgba(0, 26, 26, 0.6);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  text-align: center;
  }
  .con img{
    left: 10%;
    border-radius: 100px;

  }
 .con p{
color:rgb(0,0,77);
font-size: 20px;
text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
}


  
  .co1 {
  position: absolute;
  top: 80%;
  left: 80%;
  transform: translate(-50%,-50%);
  width: 520px;
  height: 215px;
  padding: 5px;
 background: rgba(0, 26, 26, 0.6);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  text-align: center;
  }

  .co1 img{
    left: 10%;
    border-radius: 100px;

  }
 

.co1 p{
color:rgb(0,0,77);
font-size: 20px;
text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;

}

  
  .co2 {
  position: absolute;
  top: 120%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 520px;
  height: 215px;
  padding: 5px;
 background: rgba(0, 26, 26, 0.6);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  text-align: center;
  }

  .co2 img{
    left: 10%;
    border-radius: 100px;

  }
 

.co2 p{color:rgb(0,0,77);
font-size: 20px;
text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;

}


p{
color: rgb(0,9,26);
font-size: 40px;
font-weight: bold;
text-align: center;
text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
}
.id p{
  position: absolute;
  top: 140%;
  left: 25%;
color: rgb(0,9,26);
font-size: 40px;
font-weight: bold;
text-align: center;
text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
}

</style>
</head>
<body>
  <p>From writing and design to interactive and animation,<br> we’re the team brands trust to deliver best-in-class content,<br> and the traction other agencies can’t.<br><br><br>Get to know us. </p>
   <div class="con">
   
    <img src="1.jpg" align="left" width="200" height="200">
     <div class="mk">
      <br><br>
      <p> Mehul A. Kakadiya<br><br>
          Computer Engineering(3rd year)
        </p>
  </div>
</div>

<div class="co1">
   
    <img src="2.jpg" align="left" width="200" height="200">
     <div class="jp">
      <br><br>
      <p> Jigar R. Parmar<br><br>
          Computer Engineering(3rd year)
        </p>
  </div>
</div>

<div class="co2">
   
    <img src="3.jpg" align="left" width="200" height="200">
     <div class="tg">
      <br><br>
      <p> Thiren R. Godhani<br><br>
          Computer Engineering(3rd year)
        </p>
  </div>
</div>
<div class="id">
<p align="center">Our clients expect the very best, so<br> that’s who we hire. If you want to<br> do work that matters with a<br> company who cares, we want you <br>on our team.<br><br></p></div>
</body>
</html> 
