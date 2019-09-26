<?php
include_once 'header.php';
require_once 'admin/admin/123.php';
extract($_POST);
if(isset($submit))
{

	if($bn=="" || $pn==""  || $yoe=="" || $cn=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$sql = "insert into book(bn,pn,yoe,cn) values ('$bn','$pn','$yoe','$cn')";
		

	if($connect->query($sql) === TRUE) {
		echo "<p color='red'>New Record Successfully Created</p>";
		header("Location:up_book.php?Uploaded!!");
		$err="<font color='green'>Book added Successfully</font>";

	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
		$err="<font color='green'>Book added Successfully</font>";	
	}
}
?>