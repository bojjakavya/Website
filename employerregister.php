<?php session_start();
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
		<form class="form-horizontal" action="process_employer_register.php" method="post">
		<legend align="center"><h1>Employer - Register</h1></legend>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="nm">Username :</label>  
  				<div class="col-md-8">
  				<input id="nm" name="nm" type="text" placeholder="Only alphabets and numbers are allowed" pattern="[0-9a-zA-Z]+" class="form-control input-md" required="">
    
  				</div>
		</div>

                <div class="form-group">
 				 <label class="col-md-4 control-label" for="pwd">Password :</label>
  				<div class="col-md-8">
  				<input id="pwd" name="pwd" type="password" placeholder="Password" class="form-control input-md" required="">
    
  				</div>
		</div>
                <div class="form-group">
 				 <label class="col-md-4 control-label" for="cnm">Company Name :</label>
  				<div class="col-md-8">
  				<input id="cnm" name="cnm" type="text" placeholder="Company Name"  class="form-control input-md" required="">
    
  				</div>
		</div>

		<div class="form-group">
  				<label class="col-md-4 control-label" for="addr">Company Address :</label>
 				 <div class="col-md-8">                     
    				<textarea class="form-control" id="addr" name="addr" placeholder="Address"></textarea>
  				</div>
		</div>

                <div class="form-group">
  				<label class="col-md-4 control-label" for="ph">Mobile Number ;</label>
  				<div class="col-md-8">
   				<div class="input-group">
      				<span class="input-group-addon">+91</span>
      				<input id="ph" name="ph" class="form-control" placeholder="Mobile Number ( 10 digits )" type="text" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required="">
    				</div>
    
  				</div>
			</div>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="email">Email :</label>
  				<div class="col-md-8">
  				<input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-md" required="">
    
  				</div>
		</div>
		
		<div class="form-group">
  				<label class="col-md-4 control-label" for="profile">Company Profile :</label>
 				 <div class="col-md-8">                     
    				<textarea class="form-control" id="profile" name="profile" ></textarea>
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
