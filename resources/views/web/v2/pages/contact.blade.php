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
					<h4 class="text-red">WE CAPTURE STORIES</h4>
					<h7>T E L L&emsp;U S&emsp;Y O U R S</h7>
				</div>
			</div>
			<div class="row contact-form bottom">
				<div class="col-xs-1 col-sm-3">
				</div>
					<form id="main-contact-form" name="contact-form" method="post" action="{{route('showcase.tell')}}">
						<div class="col-xs-10 col-sm-6">
							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control" required="required" placeholder="Mr. Who">
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control" required="required" placeholder="chidory@gmail.com">
							</div>
							<div class="form-group">
								<input type="text" name="phone" id="phone" class="form-control" required="required" placeholder="+62.xxx.xxxx.xxx">
							</div>
							<div class="form-group">
								<select type="category" name="category" id="category" class="form-control" required="required">
									@foreach($category as $k => $v)
										<option value="{{$v['content']['category']}}">{{$v['content']['category']}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<input type="date" name="date" id="date" class="form-control" required="required" placeholder="when" min="{{$now->format('Y-m-d')}}">
								<span><small class="text-warning" style="padding-left: 10px;">*shooting date</small></span>
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
