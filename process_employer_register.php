<?php
include 'dbCon.php';
	if(empty($_POST))
	{
		exit;
	}
	else
	{
		
		$nm=$_POST['nm'];
		$cnm=$_POST['cnm'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$email=$_POST['email'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		
		
		$q="insert into employers(er_fnm,er_pwd,er_company,er_add,er_ph,er_email,er_company_profile)
		   values ('$nm','$pwd','$cnm','$addr','$ph','$email','$profile')";
		   
		mysqli_query($link,$q)or die("wrong query");
		mysqli_close($link);
		header("location:employerregister.php?w=Successfully Registered");
	}
?>