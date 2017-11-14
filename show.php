<?php session_start();
include 'dbCon.php';
	if(! isset($_SESSION['status']))
	{
		header("location:index.php");
	}
		
		$q="select * from employees where ee_id in(select a_uid from applicants where a_jid=".$_GET['id']." )";
	
		$res=mysqli_query($link,$q) or die ("wrong query");
		
		
	
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
			<div id="content">
				<div class="post">
					
					<h2 class="title"><?php echo $_GET['nm']; ?></h2>
					<p class="meta"></p>
					<div class="entry">
				
					<table class="table table-striped table-bordered">
				
				<tr>
						<th>S.No
						<th>Applicant's Email
                        <th>Contact
						<th>Resume
						
					</tr>
				
					
				<?php
				$count=1;
					while($row=mysqli_fetch_array($res))
					{
						
						echo '<tr> <td>'.$count.'
								<td>'.$row['ee_email'].'
                                <td>'.$row['ee_mobileno'].'
								<td><a href="'.$row['ee_resume'].'">Download/Open</a>
								';
							$count++;
					}
				?>
				
					</table>
						
					</div>
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
