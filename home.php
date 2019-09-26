
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
.box {
  
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.4);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 50px;

  }
 
  .con {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 300px;
  height: 180px;
  padding: 20px;
  background: rgba(0, 0, 0, 0.4);
  box-sizing: border-box;
  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  text-align: center;
  }
.box h1{
   margin: 0 0 10px;
   padding: 5px;
   top: 50%;
   left: 50%;
   color: rgba(0, 50, 0, 0.9);
   box-shadow: 10px 15px 25px rgba(0,0,0,.5);
   font-size: 60px;
   border-radius: 50px;
   text-align: center;

}



.con input[type="submit"]
{
  width: 100%;
  background: rgba(10,0,0,.8);
  color: skyblue;

  border: 2px solid skyblue;
  outline: none;
  font-size: 30px;
  padding: 10px 20px;
  font-weight: bold;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; 
}


</style>
</head>
<body>


<div class="box">
     <h1>E-Note</h1>
   </div>
   <div class="con">
<form action="login.php">
<input type="submit" value="Student" name="stu">
<br>
<br>
</form>
<form action="fac/login_fac.php">
<input type="submit" value="Faculty" name="fac">
  
   
</div>
</form>


</body>
</html> 
