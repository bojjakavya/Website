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
		<form class="form-horizontal" action="process_employee_register.php"  enctype="multipart/form-data" method="post">
		<legend align="center"><h1>Employee - Register</h1></legend>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="nm">Username :</label>  
  				<div class="col-md-8">
  				<input id="nm" name="nm" type="text" placeholder="Only Alphabets and Numbers allowed" pattern="[a-zA-Z0-9]+" class="form-control input-md" required="">
    
  				</div>
		</div>

                <div class="form-group">
 				 <label class="col-md-4 control-label" for="pwd">Password :</label>
  				<div class="col-md-8">
  				<input id="pwd" name="pwd" type="password" placeholder="Password" class="form-control input-md" required="">
    
  				</div>
		</div>
		<div class="form-group">
  				<label class="col-md-4 control-label" for="gender">Gender :</label>
  				<div class="col-md-2"> 
    				<label class="radio-inline" for="gender-0">
      				<input type="radio" name="gender" id="gender-0" value="MALE"> Male
    				</label> 
    				<label class="radio-inline" for="gender-1">
      				<input type="radio" name="gender" id="gender-1" value="female"> Female
    				</label>
  				</div>
		</div>

		<div class="form-group">
 				 <label class="col-md-4 control-label" for="email">Email :</label>
  				<div class="col-md-8">
  				<input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-md" required="">
    
  				</div>
		</div>
		

		
		<div class="form-group">
  				<label class="col-md-4 control-label" for="ph">Phone Number ;</label>
  				<div class="col-md-8">
   				<div class="input-group">
      				<span class="input-group-addon">0-861-</span>
      				<input id="ph" name="ph" class="form-control" placeholder="Landline Number (7 digits)" type="text" maxlength="7" pattern="[1-9]{1}[0-9]{6}" required="">
    				</div>
    
  				</div>
			</div>
		<div class="form-group">
  				<label class="col-md-4 control-label" for="mobile">Mobile Number ;</label>
  				<div class="col-md-8">
   				<div class="input-group">
      				<span class="input-group-addon">+91</span>
      				<input id="mobile" name="mobile" class="form-control" placeholder="Mobile Number ( 10digits )" type="text" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required="">
    				</div>
    
  				</div>
			</div>
		<div class="form-group">
  				<label class="col-md-4 control-label" for="addr">Current Address :</label>
  				<div class="col-md-8">
  				<input id="addr" name="addr" type="text" placeholder="Address" class="form-control input-md" required="">
  				</div>
		</div>

                <div class="form-group">
  				<label class="col-md-4 control-label" for="cl">Current Location :</label>
  				<div class="col-md-8">
  				<input id="cl" name="cl" type="text" placeholder="Location" class="form-control input-md" required="">
  				</div>
		</div>

                <div class="form-group">
  				<label class="col-md-4 control-label" for="cas">Current Annual Salary :</label>
  				<div class="col-md-8">
  				<input id="cas" name="cas" type="text" placeholder="Current salary" class="form-control input-md" pattern="[1-9]{1}[0-9]+" required="">
  				</div>
		</div>

                <div class="form-group">
  				<label class="col-md-4 control-label" for="cindustry">Current Industry :</label>
  				<div class="col-md-8">
  				<input id="cindustry" name="cindustry" type="text" placeholder="Company Name" class="form-control input-md" required="">
  				</div>
		</div>
                <div class="form-group">
  				<label class="col-md-4 control-label" for="quali">Qualification :</label>
  				<div class="col-md-8">
  				<input id="quali" name="quali" type="text" placeholder="Ex:- Btech" class="form-control input-md" srequired="">
  				</div>
		</div>
		
		<div class="form-group">
  				<label class="col-md-4 control-label" for="profile">Introduction :</label>
 				 <div class="col-md-8">                     
    				<textarea class="form-control" id="profile" name="profile" placeholder="Explain yourself in 500 words"></textarea>
  				</div>
		</div>
		
		<div class="form-group">
  				<label class="col-md-4 control-label" for="resume">Resume :</label>
 				 <div class="col-md-8">                     
    				<input type="file" class="form-control" id="resume" name="resume" >
                     <span>only <strong>.doc</strong> Files accepted</span>
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
