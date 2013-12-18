
<body>
	<header>
		<div class="header-title">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Helping Hands Organisation of Kenya</h1>
					</div>
				</div>
			</div>
		</div>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul>
							<?php if (perch_layout_var('title')=="Homepage")
							  {
							  	echo '<li class="selected"><span>Homepage</span><span class="nav-arrow-down">&nbsp;</span></li>';
							  }
							 else 
							 {
								echo '<li><a href="/">Homepage</a></li>';
							 }
							 ?>

							<?php if (perch_layout_var('title')=="Who we are")
							  {
							  	echo '<li class="selected"><span>Who we are</span><span class="nav-arrow-down">&nbsp;</span></li>';
							  }
							 else 
							 {
								echo '<li><a href="who_we_are">Who we are</a></li>';
							 }
							 ?>

							<?php if (perch_layout_var('title')=="What we do")
							  {
							  	echo '<li class="selected"><span>What we do</span><span class="nav-arrow-down">&nbsp;</span></li>';
							  }
							 else 
							 {
								echo '<li><a href="what_we_do">What we do</a></li>';
							 }?>

							<?php if (perch_layout_var('title')=="Get involved")
							  {
							  	echo '<li class="selected"><span>Get involved</span><span class="nav-arrow-down">&nbsp;</span></li>';
							  }
							 else 
							 {
								echo '<li><a href="get_involved">Get involved</a></li>';
							 }?>
							<?php if (perch_layout_var('title')=="Blog list")
							  {
							  	echo '<li class="selected"><span>Blog</span><span class="nav-arrow-down">&nbsp;</span></li>';
							  }
							 else 
							 {
								echo '<li><a href="blog">Blog</a></li>';
							 }?>
							<?php if (perch_layout_var('title')=="Donation")
							  {
							  	echo '<li class="selected"><span>Donate</span><span class="nav-arrow-down">&nbsp;</span></li>';
							  }
							 else 
							 {
								echo '<li><a href="donate">Donate</a></li>';
							 }?>
							 <li><a href="#contactUs">Contact us</a></li>
			       		</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>