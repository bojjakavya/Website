<?php 
include 'dbCon.php';
session_start();


	
		
	$q = "select * from jobs where j_id =".$_GET['id'];
	
	$res = mysqli_query($link,$q) or die("Wrong Query");
	
	$row = mysqli_fetch_assoc($res);
	
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
		<!-- end #menu -->
		
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
					<legend align="center"><h2><?php echo $row['j_title']; ?></h2></legend>
					<div class="entry">
						<table class="table table-bordered 
table-hover table-striped">
							
						<?php
						
						echo '<tr><td ><b>Category</b><br><td>'.$row['j_category'].'</td></tr>
								<tr><td><b>Salary</b></td><td>'.$row['j_salary'].'</td></tr>
								<tr><td><b>Hours</b></td><td>'.$row['j_hours'].'</td></tr>
								<tr><td><b>Experience</b></td><td>'.$row['j_experience'].'</td></tr>
								<tr><td><b>City</b></td><td>'.$row['j_city'].'</td></tr>
								<tr><td><b>Description</b></td><td>'.$row['j_discription'].'</tr>
								';
						
						?>
						<br>
						<br>
					
		<?php
	
				if(isset($_SESSION['status']) && $_SESSION['cat']=="employee")
				{
					echo'<tr><td colspan="2"><center><a href="process_apply.php?jid='.$row['j_id'].'" class="btn btn-primary btn-block"> Apply </center></td></tr></a>';
				}
	
		?>
								
							
					
						</table>
					
					
						
				</div>
				
			</div>
			<!-- end #content -->
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
