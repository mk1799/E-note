




<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
<form action="admin.php" method="POST" enctype="multipart/form-data">
<div>
	<input type="text" name="id" placeholder="Enter image ID">
	<br>
	<input type="file" name="image">
	<br>
	<input type="submit" name="upload" value="Upload">



	<br>

	<?php
include_once 'inc/123.php';

if (isset($_POST["upload"])) {
  $img = $_FILES["image"]["name"];
  $target = "./img/".$img;
  move_uploaded_file($_FILES["image"]["name"],$target);
  $text=$_POST['id'];
$sql="INSERT INTO images (image,id) VALUES('$img','$text')";
mysqli_query($conn,$sql);
 
}
?>
	 <?php
      $sql="SELECT * FROM images";
      $result= mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
        echo "<img src='./img/".$row['image']."'>";

        echo "</div>";
      }
?>
</div>
</form>
</body>
</html>