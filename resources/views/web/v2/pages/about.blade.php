@extends('web.v2.layout.base')

@section('nav.about')
	active
@endsection

@section('pages')
	<!-- <section id="breadcrumb">
		<div class="vertical-center sun">
		</div>
   </section> -->
   <div class="clearfix">&nbsp;</div>
   <div class="clearfix">&nbsp;</div>
   <div class="clearfix">&nbsp;</div>
   <!-- Service Section -->
	<section id="services" class="section services">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<img src="/gambar/logo/representative.jpeg" class="img-responsive" alt=""> </a> 
				</div>
				<div class="col-md-4 bg-cream">
					<div class="">
						<div class="services-content">
			    			<p class="hidden-sm hidden-md hidden-lg">&nbsp;</p>
							<h1 style="font-family: 'Sacramento', cursive;font-size:4.8rem;">Our Story</h1>
							<p>
								Started from a hobby of capturing stories in photos, we find our desire to capture love inside photos and videos in the year of 2015.
							</p>
							<p>
								The appreciation of chidory's client, is the highest level of any achievement we could ever had. The happy smile of our client  makes us keep doing our best for the future.
							</p>
							<p>
								Chidory has taken leaf as a mascot, because we believe that leaf is a place where plant manage their food, photosynthesis and produce energy. And that's how exactly Chidory would like to be, a place to produce masterpiece which is bring positive energy and good favor to everyone around.
							</p>
			    			<p class="hidden-sm hidden-md hidden-lg">&nbsp;</p>
						</div>
					</div>
				</div>
			</div>
		    <div class="clearfix">&nbsp;</div>
		    <div class="clearfix">&nbsp;</div>
		    <div class="clearfix">&nbsp;</div>
		    <div class="clearfix">&nbsp;</div>
			<div class="row" style="padding:0px 50px 50px 50px;">
				<div class="col-md-12 text-center">
					<div class="services-content">
						<h1 style="font-family: 'Sacramento', cursive;font-size:6rem" class="text-red">Our Team</h1>
					</div>
				</div>
				<div class="col-md-3">
					<img src="/gambar/about/febri.jpg" class="img-responsive" alt=""> 
				</div>
				<div class="col-md-3" style="padding: 15px;">
					<h6 style="font-size:4rem">Febri</h6>
					<h7 class="text-secondary">
						<a class="text-warning" href="http://instagram.com/febrikristiawan_" target="__blank">
							<i class="fa fa-instagram"></i> febrikristiawan_
						</a>
					</h7>
					<p>
						"Karya Foto Dan Video Yang Indah Adalah Yang Menyentuh Hati Dan Bercerita."
					</p>
				</div>
				<div class="col-md-3">
					<img src="/gambar/about/ronny.jpg" class="img-responsive" alt=""> 
				</div>
				<div class="col-md-3" style="padding: 15px;">
					<h6 style="font-size:4rem">Ronny</h6>
					<h7 class="text-secondary">
						<a class="text-warning" href="http://instagram.com/ronnysugiarto0304" target="__blank">
							<i class="fa fa-instagram"></i> ronnysugiarto0304
						</a>
					</h7>
					<p>
						"Foto Yang Indah Bukan Hanya Foto Yang Terang, Karena Bayangan Juga Membentuk Kedalaman Dan Karakter."
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section --> 
@include('web.v2.component.contact')
@endsection
