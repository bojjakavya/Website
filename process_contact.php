<?php
include 'dbCon.php';
	if(empty($_POST))
	{
		exit;
	}
	else
	{
		
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$query=$_POST['query'];
		
		$q="insert into contact(cont_fnm,cont_email,cont_query)
		   values ('$nm','$email','$query')";
		   
		mysqli_query($link,$q)or die();
		mysqli_close($link);
		header("location:contact.php?w=Successfully Sent");
	}
?>