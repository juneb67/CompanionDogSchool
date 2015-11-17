<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Dog School, Dog Training, Dog Agility, Dog Boarding, Puppy Class">
		<meta name="author" content="June Bowman">
		
		<title>Companion Dog School</title>
		
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
				<a class="navbar-brand brand-color" style="color: #063E53" href="#">Companion Dog School</a>
			</div><!-- navbar-header -->	
		
			<div class="navbar-collapse collapse">
				<!-- Right nav -->
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
							aria-expanded="false">
							Classes<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Puppy</a></li>
							<li><a href="#">Agility</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Obedience</li>
							<li><a href="#">Basic</a></li>
							<li><a href="#">Advanced</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
							aria-expanded="false">
							About<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Pat Higgins</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Images</a></li>
							<li><a href="#">Awards</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
							aria-expanded="false">
							Other Services<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Boarding</a></li>
							<li><a href="#">Private Sessions</a></li>
						</ul>
					</li>
					<li><a href="#">Contact</a></li>
				</ul>
          	</div><!--/.nav-collapse -->
        
		</div><!--/.container -->
      
	</div><!-- navbar -->

	<div class="container" style="margin-top:20px;">	

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron jumbo_nopadding">
		
			<div class="row">
				<div class="col-md-12 text-center"><h2>Welcome!</h2></div>
			</div>
		
			<div class="row">
				<div class="col-md-12">
					<p>Companion Dog School in Louisville, KY is a premier dog training facility that offers 
					obedience training, agilty training, boarding and more.  Pat Higgins has been in the 
					industry for over 38 years.  Please contact us if you need more information or you are ready 
					to start your pet training expierence.</p>
				</div><!-- column -->
			</div><!-- row -->
		
			<div class="text-center">
				<a href="/">
					<button type="button" class="btn btn-default" aria-label="Left Align">
						<span class="glyphicon glyphicon-education blue-color" aria-hidden="true"></span>
						&nbsp;&nbsp;Which class is right for you?&nbsp;&nbsp;
						<span class="glyphicon glyphicon-education blue-color" aria-hidden="true"></span>
					</button>
				</a>
			</div><!-- text-center -->
		
		</div><!-- Jumbotron -->	
	
		<div class="body-margin">

			<div class="row">
				<div class="col-md-12 hidden-sm hidden-xs">
					<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
					<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
						<div class="slides"></div>
						<h3 class="title"></h3>
						<a class="prev">‹</a>
						<a class="next">›</a>
						<a class="play-pause"></a>
						<ol class="indicator"></ol>
					</div>
				</div><!-- column -->
			</div><!-- row -->

			<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
				<div class="slides"></div>
				<h3 class="title"></h3>
				<a class="prev">‹</a>
				<a class="next">›</a>
				<a class="close">×</a>
				<a class="play-pause"></a>
				<ol class="indicator"></ol>
			</div><!-- blueimp-gallery -->

			<div id="links" class="links">
				<a href="images/dog1.jpg" title="Eddie"><img src="images/thumbnails/dog1.jpg" 
					alt="Picture of Eddie - Border Collie"></a>
				<a href="images/dog2.jpg" title="Tebow"><img src="images/thumbnails/dog2.jpg" 
					alt="Picture of Tebow - Border Collie"></a>
				<a href="images/dog3.jpg" title="Julianne and Wally"><img src="images/thumbnails/dog3.jpg" 
					alt="Picture of Julianne and her dog, Wally"></a>
				<a href="images/dog4.jpg" title="Ares"><img src="images/thumbnails/dog4.jpg" alt="Picture of Ares - Husky"></a>
				<a href="images/dog5.jpg" title="Freddie"><img src="images/thumbnails/dog5.jpg" 
					alt="Picture of Freddie - Miniature Schnauzer"></a>
				<a href="images/dog6.jpg" title="Olive"><img src="images/thumbnails/dog6.jpg" alt="Picture of Olive - Black Lab"></a>
				<a href="images/dog7.jpg" title="Sammy"><img src="images/thumbnails/dog7.jpg" alt="Picture of Sammy"></a>
				<a href="images/dog8.jpg" title="Lucky is the inmate - Brandy is the cop"><img src="images/thumbnails/dog8.jpg" 
					alt="Picture of Lucky and Brandy"></a>
				<a href="images/dog9.jpg" title="Kenzie"><img src="images/thumbnails/dog9.jpg" alt="Picture of Kenzie"></a>
				<a href="images/dog10.jpg" title="Dani"><img src="images/thumbnails/dog10.jpg" alt="Picture of Dani - Great Dane"></a>
				<a href="images/group.jpg" title="Halloween Party 2015"><img src="images/thumbnails/group.jpg" 
					alt="Halloween Party 2015"></a>
			</div><!-- Links -->

			<div class="social-links">
				<a href="https://www.facebook.com/cdslouisville/?fref=ts" target="_blank" title="Like Us!">
					<i class="fa fa-facebook-official FB" style="font-size: 2em;"></i>&nbsp;&nbsp;Follow Us!
				</a>
			</div><!-- social links -->

		</div><!-- body-margin -->

	</div><!--/.container -->
	
	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		<div class="container">
			<div class="footer text-center">
				&copy; 2015 Companion Dog School. All rights reserved.<br> 
				6501 Shepherdsville Road . Louisville, KY 40228 . (502) 969-3644
			</div><!-- footer -->
		</div><!--/.container -->
	</div><!-- navbar -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>

    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
	
	<!-- Blueimp gallery -->
	<script src="js/blueimp-gallery.min.js"></script>
	
	<script src="js/app.js"></script>

	</body>

</html>