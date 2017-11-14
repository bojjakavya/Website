<?php session_start();
if(! isset($_SESSION['status']))
	{
		header("location:index.php");
	}
		include 'dbCon.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header1-wrapper">
	<div id="header1">
	<div id="menu1">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
		<div class="col-md-8">
			<legend align="center"><h1>Recent Queries</h1></legend>
			
			<table class="table table-striped table-bordered" >
		
			<tr>
			<th>Name
			<th>Query
			<th>Delete
			</tr>
			
			
			
			<?php
			$q="select * from contact";
			$res=mysqli_query($link,$q);
			
			while($row=mysqli_fetch_assoc($res))
			{
				echo'
						<tr>
						<td>
						'.$row['cont_fnm'].'<br><small>'.$row['cont_email'].'</small><br><br>
						<td>'.$row['cont_query'].'
						<td><a href="process_delete.php?cat='.$row['cont_fnm'].'"><img src = "images/delete.png"></a>
						</tr>
			
				';
			}
			?>
			</table>
			
			</div>
            <div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
<!-- end #sidebar -->
    <div style="clear: both;">&nbsp;</div>
		</div>
		
	</div>
    </div>
	<!-- end content -->
	
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
