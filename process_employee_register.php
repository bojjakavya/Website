<?php
include 'dbCon.php';
	
	
	if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='.DOC'))
	{
		echo "wrong file type";
	}
	
	else{
		
		$nm=$_POST['nm'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$mobile=$_POST['mobile'];
		$cl=$_POST['cl'];
		$cas=$_POST['cas'];
		$cindustry=$_POST['cindustry'];
		$quali=$_POST['quali'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
		$path = "uploads/".$_FILES['resume']['name'];
		
		
		$q="insert into employees(ee_resume,ee_pwd,ee_fnm,ee_gender,ee_email,ee_add,ee_phno,ee_mobileno,ee_current_location,ee_annualsalary,ee_current_industry,ee_qualification,ee_profile)
	    values ('$path','$pwd','$nm','$gender','$email','$addr','$ph','$mobile','$cl','$cas','$cindustry','$quali','$profile')";
		   
		mysqli_query($link,$q)or die("wrong query");
		mysqli_close($link);
		header("location:employeeregister.php?w=Successfully Registered");
	}
?>