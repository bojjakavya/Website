<ul>
					<li>
					<?php
include 'dbCon.php';

				if(isset($_SESSION['status']))
				{
					echo '<h2 class="title">Hello '.$_SESSION['unm'].'!</h2>';
				}
				?>
					</li>
						<h2>Available Job Categories </h2>
                            <div class="list-group">
  
  
					<?php
						$q="select * from categories";
						$res=mysqli_query($link,$q) or die("cant connect");
						while($row=mysqli_fetch_assoc($res))
						{
							echo '<a href="jobs_by_category.php?cat='.$row['cat_nm'].'" class="list-group-item">'.$row['cat_nm'].'</a>';
						}
						mysqli_close($link);
					?>
    </div>
						</ul>