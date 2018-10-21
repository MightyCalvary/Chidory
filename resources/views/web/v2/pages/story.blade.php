@extends('web.v2.layout.base')

@section('nav.portfolio')
  active
@endsection

@section('pages')
<!-- work details section -->
<section id="work-detail" class="section work-detail">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 work-detail-margin detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/55.cheesenclickDRA_1192.jpg">
				</div>
			</div>
			<div class="col-md-4 work-detail-margin detail-contentbox">
				<div class="detail-content">
					<h4  style="font-family: 'Sacramento', cursive;font-size:4rem">A & B Wedding</h4>
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. condimentum nibh.</p>
					<a id="submit_btn" class="default-btn gray-btn" href="{{route('showcase.contact')}}">Contact<i class="fa fa-angle-double-right"></i></a> 
				</div>
			</div>
		</div>
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="row">
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/17.cheesenclickDR1_5525.jpg">
				</div>
			</div>
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/08.cheesenclickDSC_1642.jpg">
				</div>
			</div>
		</div>

		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="row">
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/16.cheesenclickDSC_1933.jpg">
				</div>
			</div>
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/20.cheesenclickDR1_5579.jpg">
				</div>
			</div>
		</div>

		<div class="clearfix">&nbsp;</div>
		<div class="row">
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/14.cheesenclickDSC_1873.jpg">
				</div>
			</div>
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/22.cheesenclickDR1_5595.jpg">
				</div>
			</div>
		</div>

		<div class="clearfix">&nbsp;</div>
		<div class="row">
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/29.cheesenclickDRA_0330.jpg">
				</div>
			</div>
			<div class="col-md-6 detail-image">
				<div class="work-image">
					<img src="http://cheesenclick.com/wp-content/uploads/2018/07/45.cheesenclickDRA_0655.jpg">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- work details section --> 
@endsection

