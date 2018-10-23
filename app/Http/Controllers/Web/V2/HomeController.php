<?php

namespace App\Http\Controllers\Web\V2;

use Carbon\Carbon;

use App\Subscribe;
use App\WebConfig;
use App\WebContent;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function home() {
		$now 		= Carbon::now();
		$slider 	= WebConfig::where('type', 'slider')->active($now)->get();
		$category 	= WebConfig::where('type', 'category')->active($now)->get();

		return view('web.v2.pages.home', compact('slider', 'category'));
	}

	public function portfolio($active = 'All') {
		$now 		= Carbon::now();
		$category 	= WebConfig::where('type', 'category')->active($now)->get()->toarray();
		$category[]	= ['content' => ['caption' => null, 'category' => 'All', 'thumbnail' => null, 'link' => route('showcase.portfolio')]];
		array_multisort($category);

		$content 	= WebContent::active($now);

		if(!str_is($active, 'All')){
			$content= $content->where('category', $active);
		}

		$content 	= $content->paginate(12);

		return view('web.v2.pages.portfolio', compact('category', 'active', 'content'));
	}

	public function about() {
		$content 	= $this->getCategory();
		return view('web.v2.pages.about', compact('content'));
	}

	public function contact() {
		$now 		= Carbon::now();
		$category 	= WebConfig::where('type', 'category')->active($now)->get();

		return view('web.v2.pages.contact', compact('category'));
	}

	public function post() {
		return redirect()->route('showcase.contact');
	}

	public function story($id = null) {
		$now 		= Carbon::now();
		$content 	= WebContent::active($now)->where('id', $id)->first();

		return view('web.v2.pages.story', compact('content'));
	}

	private function getCategory(){
		return [
			['title' => 'Dream keep us awake', 'category' => 'Graduation', 'thumbnail' => '/auro/images/portfolio/work-1.jpg', 'link' => route('showcase.portfolio', ['category' => 'Graduation'])],
			['title' => 'B A T I K', 'category' => 'Product', 'thumbnail' => '/auro/images/portfolio/work-6.jpg', 'link' => route('showcase.portfolio', ['category' => 'Product'])],
			['title' => 'Love will find it`s way', 'category' => 'Prewedding', 'thumbnail' => '/auro/images/portfolio/work-2.jpg', 'link' => route('showcase.portfolio', ['category' => 'Prewedding'])],
			['title' => 'On The Aisle', 'category' => 'Wedding', 'thumbnail' => '/auro/images/portfolio/work-3.jpg', 'link' => route('showcase.portfolio', ['category' => 'Wedding'])],
			['title' => 'The Precious Gift', 'category' => 'Maternity', 'thumbnail' => '/auro/images/portfolio/work-4.jpg', 'link' => route('showcase.portfolio', ['category' => 'Maternity'])],
			['title' => 'Dream Big', 'category' => 'Children', 'thumbnail' => '/auro/images/portfolio/work-5.jpg', 'link' => route('showcase.portfolio', ['category' => 'Children'])],
		];
	}

	private function getContent(){
		return [
			['title' => 'Dream keep us awake', 'category' => 'Graduation', 'thumbnail' => '/auro/images/portfolio/work-1.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Graduation'])],
			['title' => 'B A T I K', 'category' => 'Product', 'thumbnail' => '/auro/images/portfolio/work-6.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Product'])],
			['title' => 'Love will find it`s way', 'category' => 'Prewedding', 'thumbnail' => '/auro/images/portfolio/work-2.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Prewedding'])],
			['title' => 'On The Aisle', 'category' => 'Wedding', 'thumbnail' => '/auro/images/portfolio/work-3.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Wedding'])],
			['title' => 'The Precious Gift', 'category' => 'Maternity', 'thumbnail' => '/auro/images/portfolio/work-4.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Maternity'])],
			['title' => 'Dream Big', 'category' => 'Children', 'thumbnail' => '/auro/images/portfolio/work-5.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Children'])],
			['title' => 'Tanya dan Aldy', 'category' => 'Wedding', 'embeed' => 'https://www.youtube.com/embed/dS8BPHq4wfQ', 'type' => 'videography'],
			['title' => 'Ulfa dan Fano', 'category' => 'Wedding', 'embeed' => 'https://www.youtube.com/embed/9CHTOM1jV38', 'type' => 'videography'],
			['title' => 'Dream keep us awake', 'category' => 'Graduation', 'thumbnail' => '/auro/images/portfolio/work-7.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Graduation'])],
			['title' => 'Dream keep us awake', 'category' => 'Graduation', 'thumbnail' => '/auro/images/portfolio/work-8.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Graduation'])],
			['title' => 'Love will find it`s way', 'category' => 'Prewedding', 'thumbnail' => '/auro/images/portfolio/work-9.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Prewedding'])],
			['title' => 'Love will find it`s way', 'category' => 'Prewedding', 'thumbnail' => '/auro/images/portfolio/work-10.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Prewedding'])],
			['title' => 'Love will find it`s way', 'category' => 'Prewedding', 'thumbnail' => '/auro/images/portfolio/work-11.jpg', 'type' => 'photography', 'link' => route('showcase.portfolio', ['category' => 'Prewedding'])],
		];
	}
}
