@extends('web.v2.layout.base')

@section('nav.portfolio')
  active
@endsection

@section('pages')
<!-- work details section -->
<section id="work-detail" class="section work-detail">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">&nbsp;</div>
			<div class="col-md-8 work-detail-margin detail-image">
				<h4 class="text-center" style="font-size:1.5rem">
					<a href="{{route('showcase.portfolio', ['category' => $content['category']])}}">
						{{strtoupper($content['category'])}}
					</a>
				</h4>
				<h4 class="text-center" style="font-family: 'Sacramento', cursive;font-size:7rem">{{$content['caption']}}</h4>
				<div class="clearfix">&nbsp;</div>
				<div class="work-image">
					<img src="{{$content['gallery']['thumbnail']}}">
				</div>
			</div>
			<div class="col-md-2">&nbsp;</div>
			<!-- <div class="col-md-4 work-detail-margin">
				<div class="detail-content">
					<h4  style="font-family: 'Sacramento', cursive;font-size:4rem">{{$content['caption']}}</h4>
					{!!$content['description']['text']!!}
					<a id="submit_btn" class="default-btn gray-btn" href="{{route('showcase.contact')}}">Contact<i class="fa fa-angle-double-right"></i></a> 
				</div>
			</div> -->
		</div>

		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="row">
			@foreach($content['gallery']['photos'] as $k => $v)
				@if($k%2==0 && $k!=0)
					</div>
					<div class="hidden-xs clearfix">&nbsp;</div>
					<div class="hidden-xs clearfix">&nbsp;</div>
					<div class="row">
				@endif
				<div class="col-xs-12 col-sm-6 detail-image">
					<div class="work-image">
						<img src="{{$v}}">
					</div>
				</div>
				<div class="hidden-sm hidden-md hidden-lg clearfix">&nbsp;</div>
			@endforeach
			</div>
		</div>
	</div>
</section>
<!-- work details section --> 
@include('web.v2.component.contact')
@endsection

