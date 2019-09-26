<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
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
	  width: 500px;
	  height: 500px;
	  padding: 10px;
	  background: rgba(255, 255, 255, 0.6);
	  box-sizing: border-box;
	  box-shadow: 10px 15px 25px rgba(0,0,0,.5);
	  border-radius: 10px;
	  text-align: center;
	  }
	  .con h1{
	  font-family: calibri;
	font-size: 40px;
	color: black;
	line-height: 20px;
	text-align: center;	
	  }

	
	.con input[type="text"]
	{
	background-color: rgba(0,0,0,.9); 
	 width: 87%;
	  border: 2px solid skyblue;
	  outline: none;
	  color: #fff;
	  font-size: 23px;
	  height: 50px;
	  cursor: pointer;
	  border-radius: 5px;
	  text-align:center; 
	}
	.con textarea
	{
	background-color: rgba(0,0,0,.9); 
	 width: 87%;
	  border: 2px solid skyblue;
	  outline: none;
	  color: #fff;
	  font-size: 23px;
	  height: 150px;
	  cursor: pointer;
	  border-radius: 5px;
	  text-align:center; 
	}

.con  button[type="submit"]
{
  width: 70%;
  height: 50px;
  background: rgba(10,0,0,.6);
  color: rgba(0,0,0,.9);
  border: 2px solid #4caf50;
    font-size: 25px;
  padding: 10px 20px;
  font-weight: bold;
  cursor: pointer;
  border-radius: 5px;
  text-align:center; }

 
	</style>
</head>
<body>

		<div class="con">

		<h1>Fill Application</h1>
		<form class="input-form"method="post">
			
			
			<input type="text" name="sn" placeholder="Name" required>
			<br>
			<input type="text" name="s" placeholder="Pen No." required>
			<br>
			<input type="text" name="dt" placeholder="Date (period of leave)" required>
			<br>
			<textarea name="app" cols="15" rows="8" placeholder="Reason i.e application" required ></textarea>
			<br>
			<br>
			<button type="submit" name="submit">Apply</button>
			<br>
		</form>

		
	</div>





</body>
</html>

<?php
include_once 'header.php';
require_once 'admin/admin/123.php';
extract($_POST);
if(isset($submit))
{

	if($sn=="" || $s==""  || $dt=="" || $app=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$sql = "insert into lea_app(name,sub,date,app) values ('$sn','$s','$dt','$app')";
		

	if($connect->query($sql) === TRUE) {
		echo "<p color='red'>New Record Successfully Created</p>";
		header("Location:leave.php?Uploaded!!");
		$err="<font color='green'>Book added Successfully</font>";

	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
		$err="<font color='green'>Book added Successfully</font>";	
	}
}
?>
