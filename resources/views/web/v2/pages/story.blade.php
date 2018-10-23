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
					<img src="{{$content['gallery']['thumbnail']}}">
				</div>
			</div>
			<div class="col-md-4 work-detail-margin detail-contentbox">
				<div class="detail-content">
					<h4  style="font-family: 'Sacramento', cursive;font-size:4rem">{{$content['caption']}}</h4>
					{!!$content['description']['text']!!}
					<a id="submit_btn" class="default-btn gray-btn" href="{{route('showcase.contact')}}">Contact<i class="fa fa-angle-double-right"></i></a> 
				</div>
			</div>
		</div>

		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="row">
		@foreach($content['gallery']['photos'] as $k => $v)
			@if($k%2==0 && $k!=0)
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="clearfix">&nbsp;</div>
				<div class="row">
			@endif
				<div class="col-md-6 detail-image">
					<div class="work-image">
						<img src="{{$v}}">
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</section>
<!-- work details section --> 
@endsection

