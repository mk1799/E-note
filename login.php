
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(p4.jpg);
    background-size: cover;
  }

  
  .con {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  height: 400px;
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
.con  input[type="submit"]
{
  width: 100%;
  background: rgba(10,0,0,.6);
  color: rgba(200,50,50,.9);

  border: 2px solid #4caf50;
  outline: none;
  font-size: 25px;
  padding: 10px 20px;
  font-weight: bold;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; 
}
.con .up input[type="text"]
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
 <?php
 session_start();
 
 ?> 
   <div class="con">
<form action="inc/log.php" method="POST">
   <div class="up">
  <h1 align="center">Login</h1> 
   	<input type="text" placeholder="Username" name="un" required><br>
   	<br>
   	<input type="Password" placeholder="Password" name="pass" required>
   </div>
<div class="upl">
	<br>
	<br>
  <input type="submit" name="submit" value="Login">
  <br>
  <br>
<div class="a">
  <a href="signup.php" >Sign Up!!</a>
</div>
</div>
</form>
</div>

</body>
</html> 
