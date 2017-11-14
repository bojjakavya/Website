<?php session_start();


	include 'dbCon.php';
		
	$q = "select * from jobs where j_category ='".$_GET['cat']."'";
	
	$res = mysqli_query($link,$q) or die("Wrong Query");
	
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
            <legend align="center"><h1><?php echo $_GET['cat']; ?></h1></legend>
					<div class="list-group">	
					<?php
                        $temp=1;
						while($row = mysqli_fetch_array($res))
						{
						
							echo '
										<a href="job_details.php?id='.$row['j_id'].'" class="list-group-item">'.$temp.' - > '.$row['j_title'].'</a>
								';
                            $temp++;
						}
						
					?>
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
