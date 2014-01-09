<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php perch_layout_var('title'); ?> | Helping Hands Organisation of Kenya, Naivasha</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="dist/css/style.css">
        <script type="text/javascript" src="dist/js/helpinghands.min.js"></script>
    </head>
	<body>
		<header>
			<div class="header-title">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-1">
							<span class="logo">&nbsp;</span>
						</div>
						<div class="col-xs-12 col-sm-10">
							<h1>Helping Hands Organisation of Kenya</h1>
						</div>
					</div>
				</div>
			</div>
			<nav>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<ul class="header-nav">
								<?php if ($title = perch_layout_var('title', true)=="Homepage")
								  {
								  	echo '<li class="selected"><span>Homepage</span></li>';
								  }
								 else 
								 {
									echo '<li><a href="/">Homepage</a></li>';
								 }
								 ?>

								<?php if ($title = perch_layout_var('title', true)=="Who we are")
								  {
								  	echo '<li class="selected"><span>Who we are</span><span class="nav-arrow-down">&nbsp;</span></li>';
								  }
								 else 
								 {
									echo '<li><a href="who_we_are">Who we are</a></li>';
								 }
								 ?>

								<?php if ($title = perch_layout_var('title', true)=="What we do")
								  {
								  	echo '<li class="selected"><span>What we do</span><span class="nav-arrow-down">&nbsp;</span></li>';
								  }
								 else 
								 {
									echo '<li><a href="what_we_do">What we do</a></li>';
								 }?>

								<?php if ($title = perch_layout_var('title', true)=="Get involved")
								  {
								  	echo '<li class="selected"><span>Get involved</span><span class="nav-arrow-down">&nbsp;</span></li>';
								  }
								 else 
								 {
									echo '<li><a href="get_involved">Get involved</a></li>';
								 }?>
								<?php if ($title = perch_layout_var('title', true)=="Blog list")
								  {
								  	echo '<li class="selected"><span>Blog</span><span class="nav-arrow-down">&nbsp;</span></li>';
								  }
								 else 
								 {
									echo '<li><a href="blog">Blog</a></li>';
								 }?>
								<?php if ($title = perch_layout_var('title', true)=="Donation")
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