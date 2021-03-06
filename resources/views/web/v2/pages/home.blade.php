@extends('web.v2.layout.base')

@section('nav.home')
	active
@endsection
@section('hero')
	<div style="position: fixed; right: 20px; bottom: 20px; z-index: 9999999;"> 
		<audio  controls autoplay src="http://chidory.co/song/yiruma/river-flows-in-you.mp3" controlsList="nodownload"></audio>
	</div>

	<!-- Slider Section --> 
	<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@foreach($slider as $k => $v)
			<li data-target="#myCarousel" data-slide-to="{{$k}}" class="@if($loop->first) active @endif"></li>
			@endforeach
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			@foreach($slider as $k => $v)
			<div class="item @if($loop->first) active @endif"> 
				<a href="{{$v['content']['link']}}">
					<img src="{{$v['content']['web']}}" class="hidden-xs">
					<img src="{{$v['content']['mobile']}}" class="hidden-sm  hidden-md  hidden-lg">
				</a>
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
			<div class="row bg-cream">
				<div class="col-md-4">
					<div class="services-content">
						<h1 style="font-family: 'Sacramento', cursive;font-size:7rem" class="text-red">{{$video['content']['title']}}</h1>
						<h4 style="font-family: 'Sacramento', cursive;font-size:3.5rem">{{$video['content']['subtitle']}}</h4>
						<p class="hidden-sm hidden-xs">{{$video['content']['description']}}</p>
					</div>
				</div>
				<div class="col-md-8" style="margin-top:50px;">
					<video controls src="{{$video['content']['embeed']}}"></video>
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
				<div class="col-sm-6 portfolio-item"> <a href="{{$v['content']['link']}}" class="portfolio-link">
					<div class="caption">
						<div class="caption-content">
							<h3>{{$v['content']['caption']}}</h3>
							<h4>{{$v['content']['category']}}</h4>
						</div>
					</div>
					<img src="{{$v['content']['thumbnail']}}" class="img-responsive" alt=""> </a> 
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
						@foreach($testimony as $k => $v)
						<li>
							<div class="col-md-12">
								<blockquote>
									<h1>"{{$v['content']['comment']}}" </h1>
									<p style="font-size:16px;margin-top: 10px;">{{$v['content']['source']}}</p>
								</blockquote>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials section --> 
@endsection