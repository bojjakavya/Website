<?php 
include 'dbCon.php';
session_start();

	if(empty($_POST))
	{
		exit;
	}
	else
	{
		
		$title=$_POST['title'];
		$cat=$_POST['cat'];
		$hours=$_POST['hours'];
		$salary=$_POST['salary'];
		$experience=$_POST['experience'];
		$disc=$_POST['disc'];
		$city=$_POST['city'];
		
		$q="insert into jobs(j_title,j_owner_name,j_category,j_hours,j_salary,j_experience,j_discription,j_city)
		   values ('$title','".$_SESSION['unm']."','$cat','$hours','$salary','$experience','$disc','$city')";
		   
		mysqli_query($link,$q)or die("wrong query");
		mysqli_close($link);
		header("location:postjob.php?w=Successfully Posted");
	}
	
?>