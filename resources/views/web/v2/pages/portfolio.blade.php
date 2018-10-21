@extends('web.v2.layout.base')

@section('nav.portfolio')
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
   <section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="portfolio-filter text-center">
						@foreach($category as $k => $v)
						<li><a class="btn btn-default @if(str_is($v['category'], $active)) active @endif" style="margin-top: 15px !important;" href="{{$v['link']}}">{{$v['category']}}</a></li>
						@endforeach
					</ul><!--/#portfolio-filter-->
			   </div>
			</div>
			<div class="row">
				@foreach($content as $k => $v)
					@if(str_is($v['type'], 'photography'))
					<div class="col-sm-4 portfolio-item"> <a href="{{route('showcase.story')}}" class="portfolio-link">
						<div class="caption">
							<div class="caption-content">
								<h3>{{$v['title']}}</h3>
								<h4>{{$v['category']}}</h4>
							</div>
						</div>
						<img src="{{$v['thumbnail']}}" class="img-responsive" alt=""> </a> 
					</div>
					@else
						<div class="col-sm-4" style="padding:1px;">
							<div class="video-container">
								<iframe width="640" height="360" src="{{$v['embeed']}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					@endif
				@endforeach
			</div>
			<div class="portfolio-pagination">
				<ul class="pagination">
				  <li><a href="#">left</a></li>
				  @foreach(range(1, $total) as $k)
				  <li class="@if($k==$page) active @endif"><a href="{{route('showcase.portfolio', ['category' => $active, 'page' => $k])}}">{{$k}}</a></li>
				  @endforeach
				  <li><a href="#">right</a></li>
				</ul>
			</div>
		</div>
	</section>
@endsection
