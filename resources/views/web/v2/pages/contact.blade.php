@extends('web.v2.layout.base')

@section('nav.contact')
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
				<div class="col-xs-12 text-center">
					<h4 class="text-red">WE CATCH STORIES</h4>
					<h7>T E L L&emsp;U S&emsp;Y O U R S</h7>
				</div>
			</div>
			<div class="row contact-form bottom">
				<div class="col-xs-1 col-sm-3">
				</div>
					<form id="main-contact-form" name="contact-form" method="post" action="{{route('showcase.tell')}}">
						<div class="col-xs-10 col-sm-6">
							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control" required="required" placeholder="Chidory">
							</div>
							<div class="form-group">
								<input type="text" name="phone" id="phone" class="form-control" required="required" placeholder="+62.xxx.xxxx.xxx">
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control" required="required" placeholder="chidory@gmail.com">
							</div>
							<div class="form-group">
								<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Please send me quotation about prewedding in Jogja"></textarea>
							</div>
							<div class="form-group">
								<button id="submit_btn" class="default-btn gray-btn"> Send <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				<div class="col-xs-1 col-sm-3">
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section --> 
@endsection
