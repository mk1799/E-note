
<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
		body{
			 margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(p4.jpg);
    background-size: cover;
		}
		.con {
	  position: absolute;
	  top: 55%;
	  left: 50%;
	  transform: translate(-50%,-50%);
	  width: 500px;
	  height: 500px;
	  padding: 20px;
	  background: rgba(0, 0, 0, 0.6);
	  box-sizing: border-box;
	  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
	  border-radius: 10px;
	  text-align: center;
	  }
	  .con h1{
	  		font-family: calibri;
	font-size: 40px;
	color: skyblue;
	line-height: 50px;
	text-align: center;	
	  }

	  .main-container input[type="submit"]
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

	.con input[type="text"]
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
	.con input[type="password"]
	{
	background-color: rgba(100,40,40,.7); 
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

.con  button[type="submit"]
{
  width: 70%;
  background: rgba(10,0,0,.6);
  color: rgba(200,50,50,.9);
  border: 2px solid #4caf50;
  outline: none;
  font-size: 25px;
  padding: 10px 20px;
  font-weight: bold;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; }

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

		<h1>Signup</h1>
		<form class="input-form" action="inc/sign.php" method="POST">
			
			
			<input type="text" name="uid" placeholder="Username" required>
			<br>
			<input type="password" name="pwd" placeholder="Password" required>
			<br>
			<input type="password" name="pwd1" placeholder="Confirm Password" required>
			<br>
			<input type="text" name="cn" placeholder="Contact No." required>
			<br>
			<br>
			<button type="submit" name="submit">Sign up</button>
			<br>
		</form>

		<form class="input-form" action="login.php" method="POST">
			<br>
			<br>
			<a href="home.php">Go to Home Page!</a>
		</form>
	</div>


</body>
</html>