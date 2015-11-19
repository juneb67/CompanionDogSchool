<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Dog School, Dog Training, Dog Agility, Dog Boarding, Puppy Class">
		<meta name="author" content="June Bowman">
		
		<title><?php echo "$title"; ?></title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		
		<!-- SmartMenus jQuery Bootstrap Addon CSS -->
		<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/blueimp-gallery.min.css">
		<link href="css/master.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="images/icon.png">		
	</head>

	<body>

	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
        
		<div class="container">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand brand-color" style="color: #063E53" href="/">Companion Dog School</a>
			</div><!-- navbar-header -->	
		
			<div class="navbar-collapse collapse">
				<!-- Right nav -->
				<ul class="nav navbar-nav navbar-right">
					<li <?php if($title == 'Companion Dog School!') echo 'class="active"'; ?> ><a href="/">Home</a></li>
					<li class="
					<?php 	
						if($title == 'Puppy Classes' || $title == 'Agility Classes' || 
							$title == 'Basic Obedience Classes' || $title == 'Advanced Obedience Classes') {
								echo 'dropdown active'; 
							} else { 
								echo 'dropdown'; 
							}?> ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
							aria-expanded="false">
							Classes&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<?php if($title == 'Puppy Classes') {
								echo '<li class="active sub-active text-center">Puppy</li>';
							} else {
								echo '<li><a href="/puppy" title="Puppy Classes">Puppy</a></li>';
							}
							if($title == 'Agility Classes') {
								echo '<li class="active sub-active text-center">Agility</li>';
							} else {
								echo '<li><a href="/agility" title="Agility Classes">Agility</a></li>';
							} ?>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Obedience</li>
							<?php
							if($title == 'Basic Obedience Classes') {
								echo '<li class="active sub-active text-center">Basic</li>';
							} else {
								echo '<li><a href="/basic" title="Basic Obedience Classes">Basic</a></li>';
							}
							if($title == 'Advanced Obedience Classes') {
								echo '<li class="active sub-active text-center">Advanced</li>';
							} else {
								echo '<li><a href="/advanced" title="Advanced Obedience Classes">Advanced</a></li>';
							} ?>
						</ul>
					</li>
					<li class="
					<?php 	if($title == 'About Pat Higgins' || $title == 'Companion Dog School Testimonials' || 
								$title == 'Images of Companion Dog School' || $title == 'Companion Dog School Awards') {
								echo 'dropdown active'; 
							} else { 
								echo 'dropdown'; 
							}?> ">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
							aria-expanded="false">About&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<?php if($title == 'About Pat Higgins') {
								echo '<li class="active sub-active text-center">Pat Higgins</li>';
							} else {
								echo '<li><a href="/about" title="About Pat Higgins">Pat Higgins</a></li>';
							}
							if($title == 'Companion Dog School Testimonials') {
								echo '<li class="active sub-active text-center">Testimonials</li>';
							} else {
								echo '<li><a href="/testimonials" title="Companion Dog School Testimonials">Testimonials</a></li>';
							}
							if($title == 'Images of Companion Dog School') {
								echo '<li class="active sub-active text-center">Images</li>';
							} else {
								echo '<li><a href="/images.php" title="Images of Companion Dog School">Images</a></li>';
							}
							if($title == 'Companion Dog School Awards') {
								echo '<li class="active sub-active text-center">Awards</li>';
							} else {
								echo '<li><a href="/awards" title="Companion Dog School Awards">Awards</a></li>';
							} ?>
						</ul>
					</li>
					<li class="
					<?php 	if($title == 'Boarding' || $title == 'Private Sessions') {
								echo 'dropdown active'; 
							} else { 
								echo 'dropdown'; 
							}?> ">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
							aria-expanded="false">
							Other Services&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<?php if($title == 'Boarding') {
								echo '<li class="active sub-active text-center">Boarding</li>';
							} else {
								echo '<li><a href="/boarding" title="Boarding">Boarding</a></li>';
							}
							if($title == 'Private Sessions') {
								echo '<li class="active sub-active text-center">Private Sessions</li>';
							} else {
								echo '<li><a href="/private" title="Private Sessions">Private Sessions</a></li>';
							}?>
						</ul>
					</li>
					<li <?php if($title == 'Contact') echo 'class="active"'; ?> ><a href="/contact">Contact</a></li>
				</ul>



          	</div><!--/.nav-collapse -->
        
		</div><!--/.container -->
      
	</div><!-- navbar -->

	<div class="container" style="margin-top:20px;">