<?php session_start();

	if(! isset($_SESSION['status']))
	{
		header("location:index.php");
	}
		include 'dbCon.php';
		$q="select * from jobs where j_owner_name='".$_SESSION['unm']."'";
		
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
			<div class="col-md-8">
					
					<legend align="center"><h1>Manage Jobs</h1></legend>
                <legend align="center"><h4>Present active posted jobs</h4></legend>
					<table class="table table-striped table-bordered" >
				<thead>
				<tr>
                    <th >No </th>
                    <th >Title</th>
                    <th >Applications</th>
                    <th >delete</th>
						
				</tr>
				</thead>
                        <tbody>
				
				<?php
				$count=1;
					while($row=mysqli_fetch_array($res))
					{
						echo '<tr> <td>'.$count.'
								<td><a href="job_details.php?id='.$row['j_id'].'">'.$row['j_title'].'
								<td><a href="show.php?id='.$row['j_id'].'&nm='.$row['j_title'].'">Show</a>
								<td><a href="process_del_job.php?id='.$row['j_id'].'"><img src="images/delete.png"></a></tr>';
						
						$count++;
					}
					
				?>
					</tbody>
					</table>
				
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
