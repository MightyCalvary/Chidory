@extends('web.v2.layout.base')

@section('nav.home')
	active
@endsection
@section('hero')
	<div style="position: fixed; left: 20px; bottom: 20px; z-index: 9999999;"> 
		<audio  controls autoplay src="http://chidory.co/song/yiruma/river-flows-in-you.mp3" controlsList="nodownload"></audio>
	</div>
	
	<!-- Slider Section --> 
	<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			@foreach($slider as $k => $v)
			<div class="item @if($loop->first) active @endif"> 
				<img src="{{$v['large']}}" alt="Wedding" class="hidden-xs">
				<img src="{{$v['small']}}" alt="Wedding" class="hidden-sm  hidden-md  hidden-lg">
			</div>
			@endforeach
		</div>
		<!-- Controls --> 
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span></a>
	</div>
@endsection

@section('pages')
	<!-- Service Section -->
	<section id="services" class="section services">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="services-content">
						<h1 style="font-family: 'Sacramento', cursive;font-size:7rem" class="text-red">Love</h1>
						<h4 style="font-family: 'Sacramento', cursive;font-size:4rem">will find it's way.</h4>
						<p class="hidden-sm hidden-xs">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
					</div>
				</div>
				<div class="col-md-8">
					<video controls src="/video/wedding.mp4"></video>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section --> 

	<!-- portfolio grid section -->
	<section id="portfolio" class="section portfolio">
		<div class="container-fluid">
			<div class="row">
				@foreach($category as $k => $v)
				<div class="col-sm-6 portfolio-item"> <a href="{{$v['link']}}" class="portfolio-link">
					<div class="caption">
						<div class="caption-content">
							<h3>{{$v['title']}}</h3>
							<h4>{{$v['category']}}</h4>
						</div>
					</div>
					<img src="{{$v['thumbnail']}}" class="img-responsive" alt=""> </a> 
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- portfolio grid section --> 

	<!-- Testimonials section -->
	<section id="testimonials" class="section testimonials no-padding">
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="col-md-12">
								<blockquote>
									<h1>"Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Phasellus non dolor nibh. Nullam elementum Aenean eu leo quam..." </h1>
									<p style="font-size:16px;margin-top: 10px;">Rene Brown, Open Window production</p>
								</blockquote>
							</div>
						</li>
						<li>
							<div class="col-md-12">
								<blockquote>
									<h1>"Cras dictum tellus dui, vitae sollicitudin ipsum. Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat shasellus non dolor nibh. Nullam elementum tellus pretium feugiat." </h1>
									<p style="font-size:16px;margin-top: 10px;">Brain Rice, Lexix Private Limited.</p>
								</blockquote>
							</div>
						</li>
						<li>
							<div class="col-md-12">
								<blockquote>
									<h1>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur...." </h1>
									<p style="font-size:16px;margin-top: 10px;">Andi Simond, Global Corporate Inc</p>
								</blockquote>
							</div>
						</li>
						<li>
							<div class="col-md-12">
								<blockquote>
									<h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elitPhasellus non dolor nibh. Nullam elementum tellus pretium feugiat. Cras dictum tellus dui sollcitudin." </h1>
									<p style="font-size:16px;margin-top: 10px;">Kristy Gabbor, Martix Media</p>
								</blockquote>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials section --> 
@endsection