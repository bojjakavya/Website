
<uul>
		<lli><a href="index.php" class="first">Home</a></lli>
	
		<?php
	
				if(!isset($_SESSION['employee']))
				{
					echo '<lli><a href="employeeregister.php">Employee Register</a></lli>';
				}
	
		?>
		
				
		<?php
	
				if(!isset($_SESSION['employer']))
				{
					echo '<lli><a href="employerregister.php">Employer Register</a></lli>';
				}
	
		?>
			            
				<lli><a href="contact.php">Contact</a></lli>
		
		<?php
                if(isset($_SESSION['employer']))
				{
					echo '<lli><a href="postjob.php">Postjob</a></lli>';
				}

				if(isset($_SESSION['employer']))
				{
					echo '<lli><a href="manage.php">Managejob</a></lli>';
				}
                if(isset($_SESSION['employer']))
				{
					echo '<lli><a href="contactdetails.php">Recent Queries</a></lli>';
				}
	
		?>		

		
		<?php
	
				if(isset($_SESSION['status']))
				{
					echo '<lli><a href="process_logout.php">Logout</a></lli>';
				}
	
				?>
</uul>
		