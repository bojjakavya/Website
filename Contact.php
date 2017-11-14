<?php 
session_start();


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
		<form class="form-horizontal" action="process_contact.php" method="post">
		<legend align="center"><h1>Contact Form</h1></legend>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="nm">Full Name :</label>  
  				<div class="col-md-8">
  				<input id="nm" name="nm" type="text" placeholder="Full Name"  class="form-control input-md" required="">
    
  				</div>
		</div>

                <div class="form-group">
 				 <label class="col-md-4 control-label" for="email">Email :</label>
  				<div class="col-md-8">
  				<input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-md" required="">
    
  				</div>
		</div>

		<div class="form-group">
  				<label class="col-md-4 control-label" for="query">Query :</label>
 				 <div class="col-md-8">                     
    				<textarea class="form-control" id="query" placeholder="Max 300 Characters" name="query"></textarea>
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
