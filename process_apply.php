<?php 
include 'dbCon.php';
session_start();
	if(empty($_GET))
	{
		header("location:index.php");
	
	}
	$q="insert into applicants (a_uid,a_jid)values(".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($link,$q) or die("wrong query");
	header("location:index.php?w=Job Applied Successfully");
	
?>