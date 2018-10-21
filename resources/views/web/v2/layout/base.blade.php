<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Chidory - Photograph Malang</title>
		<link rel="stylesheet" href="/auro/css/bootstrap.min.css">
		<link rel="stylesheet" href="/auro/css/flexslider.css">
		<link rel="stylesheet" href="/auro/css/main.css">
		<link rel="stylesheet" href="/auro/css/responsive.css">
		<!-- <link rel="stylesheet" href="/auro/css/animate.min.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<style type="text/css">
			audio { width: 75px; display: block; margin:20px; }
			video { width: 90%; display: block; margin:20px; }

			.video-container {
			  position: relative;
			  padding-bottom: 58.75%; /*16:9*/
			  padding-top: 30px; 
			  height: 0; 
			  overflow: hidden;
			}
			 
			.video-container iframe,
			.video-container object,
			.video-container embed {
			  position: absolute;
			  top: 0;
			  left: 0;
			  width: 100%;
			  height: 100%;
			}

		</style>
	</head>

	<body>	
		<!-- Header Section -->
		<section class="tophead" role="tophead"> 
			<!-- Navigation Section -->
			<header id="header">
				<div class="header-content clearfix" style="border-bottom: 1px solid #ddd !important;"> <a class="logo" href="{{route('showcase.home')}}"><img src="http://chidory.co/theme/images/icons/chi_logo.png" style="max-width: 40px;"></a>
					<nav class="navigation" role="navigation">
						<ul class="primary-nav">
							<li><a href="{{route('showcase.home')}}" class="@yield('nav.home')">Home</a></li>
							<li><a href="{{route('showcase.portfolio')}}" class="@yield('nav.portfolio')">Portfolio</a></li>
							<li><a href="{{route('showcase.about')}}" class="@yield('nav.about')">About</a></li>
							<li><a href="{{route('showcase.contact')}}" class="@yield('nav.contact')">Contact</a></li>
						</ul>
					</nav>
					<a href="#" class="nav-toggle">Menu<span></span></a> </div>
			</header>
			@yield('hero')
		</section>

		@yield('pages')

		<!-- footer section -->
		<footer id="contact" class="footer">
			<div class="container-fluid">
				<!-- <div class="col-md-2 left">
					<h4>Office Location</h4>
					<p> PCP II AS 86 Kedungkandang, Malang - Indonesia</p>
				</div> -->
				<div class="col-md-2 left">
					<h4>Contact</h4>
					<p> Call: +62.857.9088.4091 <br>
						Email : <a href="mailto:hello@chidory.co"> hello@chidory.co </a></p>
				</div>
				<div class="col-md-2 left">
					<h4>Social presense</h4>
					<ul class="footer-share">
						<li><a href="https://wa.me/6285790884091?text=I'm%20inquiring%20about%20the%20photograph" target="__blank"><i class="fa fa-whatsapp"></i></a></li>
						<li><a href="https://www.facebook.com/chidoryhome/" target="__blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/chidoryhome" target="__blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UClo_wcUys2fFDVhmuXWkCyw" target="__blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md-6 right">
					<p>© 2018 All rights reserved. All Rights Reserved<br>
						Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.chidory.co/">Chidory</a></p>
				</div>
			</div>
		</footer>
		<!-- footer section --> 

		<!-- JS FILES --> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
		<script src="/auro/js/bootstrap.min.js"></script> 
		<script src="/auro/js/jquery.flexslider-min.js"></script> 
		<script src="/auro/js/retina.min.js"></script> 
		<script src="/auro/js/modernizr.js"></script> 
		<script src="/auro/js/main.js"></script>
	</body>
</html>