<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="description" content="{{$layout['description']}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta property="og:type" content="website"/>
		<meta property="og:url" content="{{$layout['og_url']}}" />
		<meta property="og:site_name" content="{{$layout['og_site_name']}}" />
		<meta name="twitter:card" content="{{$layout['twitter_card']}}" />

		<title>Chidory Photography</title>
		
		<link rel="icon" type="image/png" href="/gambar/logo/favicon.ico"/>

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
				<div class="header-content clearfix" style="border-bottom: 1px solid #ddd !important;"> 
					<a class="logo" href="{{route('showcase.home')}}">
						<img class="hidden-xs" src="/gambar/logo/logo.png" style="max-width: 160px; padding: 5px !important;position: fixed;top:2px;">
						<img class="hidden-sm hidden-md hidden-lg" src="/gambar/logo/logo.png" style="max-width:150px; padding: 5px !important;position: fixed;top:2px; ">
						<p>&nbsp;</p>
					</a>
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
				<div class="col-md-2 left">
					<h4>Office Location</h4>
					<p>{{config()->get('web.address')}}</p>
					<!-- <p> Chandra Kirana Regency C2 / 25A, Singosari, Malang, Jawa Timur</p> -->
					<div class="clearfix">&nbsp;</div>
				</div>
				<div class="col-md-2 left">
					<h4>Contact</h4>
					<p> Call: {{config()->get('web.phone')}} <br>
						Email : <a href="mailto:{{config()->get('web.email')}}"> {{config()->get('web.email')}} </a></p>
					<div class="clearfix">&nbsp;</div>
				</div>
				<div class="col-md-2 left">
					<h4>Social presense</h4>
					<ul class="footer-share">
						<li><a href="{{config()->get('web.whatsapp')}}" target="__blank"><i class="fa fa-whatsapp" style="font-size: 16px !important;"></i></a></li>
						<li>&nbsp;</li>
						<li><a href="{{config()->get('web.facebook')}}" target="__blank"><i class="fa fa-facebook" style="font-size: 16px !important;"></i></a></li>
						<li>&nbsp;</li>
						<li><a href="{{config()->get('web.instagram')}}" target="__blank"><i class="fa fa-instagram" style="font-size: 16px !important;"></i></a></li>
						<li>&nbsp;</li>
						<li><a href="{{config()->get('web.youtube')}}" target="__blank"><i class="fa fa-youtube" style="font-size: 16px !important;"></i></a></li>
					</ul>
					<div class="clearfix">&nbsp;</div>
				</div>
				<div class="col-md-6 right">
					<p>© 2018 All rights reserved. All Rights Reserved<br>
						Made with <i class="fa fa-heart pulse"></i> by <a href="{{config()->get('web.url')}}">Chidory</a></p>
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