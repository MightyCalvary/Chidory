<?php

namespace App\Http\Controllers\Web\V2;

use Carbon\Carbon;

use App\Subscribe;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function home() {
		$slider 	= [
			['large' => '/auro/images/slider/slid1.jpg', 'small' => '/auro/images/slider/slid1-sm.jpg'],
			['large' => '/auro/images/slider/slid2.jpg', 'small' => '/auro/images/slider/slid2-sm.jpg'],
		];

		$category 	= $this->getCategory();

		return view('web.v2.pages.home', compact('slider', 'category'));
	}

	public function portfolio($active = 'All') {
		$category 	= $this->getCategory();
		$category[]	= ['title' => null, 'category' => 'All', 'thumbnail' => null, 'link' => route('showcase.portfolio')];
		array_multisort($category);

		$content 	= collect($this->getContent());
		$total 		= ceil(count($content) / 12);
		if(!str_is($active, 'All')){
			$content= $content->where('category', $active);
		}

		$page 		= 1;

		if(request()->has('page')){
			$page  	= request()->get('page') * 1;
		}

		$content 	= $content->forPage($page, 12)->all();

		return view('web.v2.pages.portfolio', compact('category', 'active', 'content', 'total', 'page'));
	}

	public function about() {
		$content 	= $this->getCategory();
		return view('web.v2.pages.about', compact('content'));
	}

	public function contact() {
		$content 	= $this->getCategory();
		return view('web.v2.pages.contact', compact('content'));
	}

	public function post() {
		return redirect()->route('showcase.contact');
	}

	public function story($id = null) {
		$category 	= $this->getCategory();
		$category[]	= ['title' => null, 'category' => 'All', 'thumbnail' => null, 'link' => route('showcase.portfolio')];
		array_multisort($category);

		$content 	= collect($this->getContent());
		$total 		= ceil(count($content) / 12);
		$page 		= 1;

		if(request()->has('page')){
			$page  	= request()->get('page') * 1;
		}

		$content 	= $content->forPage($page, 12)->all();

		return view('web.v2.pages.story', compact('category', 'active', 'content', 'total', 'page'));
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
