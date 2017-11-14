<?php session_start();
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
			<div class="col-md-6">
		<form class="form-horizontal" action="process_postjob.php" method="post">
		<legend align="center"><h1>Post Job</h1></legend>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="title">Title :</label>
  				<div class="col-md-8">
  				<input id="title" name="title" type="text" placeholder="Name of the Job"  class="form-control input-md" required="">
    
  				</div>
		</div>
		
		<div class="form-group col-md-12">
                                       <label class="col-md-4 control-label" for="title">Category : </label>
                                       <div class="col-md-8">
    				          <select id="cat" name="cat" class="form-control">
      				                <?php

						
						$q="select * from categories";
	
						$res=mysqli_query($link,$q) or die('wrong query');
	
						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
    				          </select>
                                         </div>
                </div>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="hours">Working Hours :</label>
  				<div class="col-md-8">
  				<input id="hours" name="hours" type="text" placeholder="Working Hours" pattern="[0-9]+" class="form-control input-md" required="">
    
  				</div>
		</div>
		
		<div class="form-group">
 				 <label class="col-md-4 control-label" for="experience">Experience :</label>
  				<div class="col-md-8">
  				<input id="experience" name="experience" type="text" placeholder="Experience in years" pattern="[0-9]+" class="form-control input-md" required="">
    
  				</div>
		</div>
		
		<div class="form-group">
 				 <label class="col-md-4 control-label" for="salary">Salary :</label>
  				<div class="col-md-8">
  				<input id="salary" name="salary" type="text" placeholder="Salary" pattern="[0-9]+" class="form-control input-md" required="">
    
  				</div>
		</div>
		
		<div class="form-group">
  				<label class="col-md-4 control-label" for="disc">Description :</label>
 				 <div class="col-md-8">                     
    				<textarea class="form-control" id="disc" name="disc"></textarea>
  				</div>
		</div>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="city">City :</label>
  				<div class="col-md-8">
  				<input id="city" name="city" type="text" placeholder="City"  class="form-control input-md" required="">
    
  				</div>
		</div>

                <div class="form-group">
  				<label class="col-md-4 control-label" for="submit"></label>
  				<div class="col-md-4">
    				<button id="submit" name="submit" class="btn btn-primary">Submit</button>
  				</div>
		</div>

		</form>
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
