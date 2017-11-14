<?php session_start();
include 'dbCon.php';

$q="select * from jobs where j_active=1 order by j_id desc ";
$res=mysqli_query($link,$q) or die ("can not select database");


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
					
					<h2 class="title"><center><b>WELCOME TO JOBPORTAL</b></center></h2>
				<div class="entry">
		
					</div>
				</div>
				<?php					if(isset($_SESSION['status']))
				{
					echo '<h2 class="title">Hello '.$_SESSION['unm'].'!</h2>';
				}
				else
				{
					echo'
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
						<form class="form-horizontal" action="process_login.php" method=POST>
                        <legend align="center">Login Form</legend>
						 <div class="form-group">
	                           <label class="col-md-4 control-label" for="unm"><b>Username:</b></label>
                                <div class="col-md-8">
                               <input type="text" class="form-control" id="unm" name="unm" placeholder="Username" required="">
                               </div>
                        </div>
                        <div class="form-group">
	                           <label class="col-md-4 control-label" for="pwd"><b>Password:</b></label>
	                           <div class="col-md-8">
                               <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required="">
                               </div>
                        </div>
                        <div class="form-group col-md-12">   
    				          <select id="cat" name="cat" class="form-control">
      				                <option value="employee">Employee</option>
      				                <option value="employer">Employer</option>
    				          </select>
			            </div>

						<button type="submit" class="btn btn-primary btn-block">Login</button>
						</form>
                        </div>
					';
					
				}
                ?>
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
