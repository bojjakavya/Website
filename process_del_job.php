<?php
include 'dbCon.php';
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		
		$q="delete from jobs where j_id=".$_GET['id'];
		
		mysqli_query($link,$q);
		
		header("location:manage.php?W=Deleted Successfully");	
?>