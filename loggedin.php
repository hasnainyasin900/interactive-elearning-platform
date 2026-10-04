<?php
  require "header.php" ;
?>

<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item active" aria-current="page"
    style="color:white;">Home</li>
  </ol>
</nav>

	<div class="card-container">
		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Digital Marketing</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
				<li><a class="card-text" href="loggedin/Digitalmarketing.php">Digital Marketing</a><br></li>
			    	<li><a class="card-text" href="loggedin/Affiliate.php">Affiliate_Marketing</a><br></li>
			    	
			    	
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">SEO</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
	    		<li><a class="card-text" href="loggedin/seo.php">Eearch Engine Optimization</a></li>	
				<li><a class="card-text" href="loggedin/off.php">OFF-Page SEO </a><br></li>
	    			
	    			
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Content Marketing</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
				<li><a class="card-text" href="loggedin/blogging.php">Blogging</a></li>
	    			
	    		</ul>
	  		</div>
		</div>

	</div>
	<center>
		<a href="loggedin/all_courses.php" class="mybtn2">Browse All Online Courses</a>
	</center>



  <?php
  require "footer.php";
   ?>
