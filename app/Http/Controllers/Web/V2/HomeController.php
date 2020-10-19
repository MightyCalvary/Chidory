<?php

namespace App\Http\Controllers\Web\V2;

use Carbon\Carbon, Mail;

use App\Subscribe;
use App\WebConfig;
use App\WebContent;

use App\Mail\ContactUs;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct(){
		$layout['description'] 	= ' Jasa photography dan videography profesional untuk foto prewedding & wedding indoor maupun outdoor area malang, batu, kepanjen, lawang, singosari, pandaan, jawa timur. Harga bersahabat, hasil natural, unik, dan romantis. Juga melayani foto maternity / kehamilan, graduation / wisuda, bayi, anak - anak.';
		$layout['og_url'] 		= url()->current();
		$layout['og_site_name'] 	= 'Chidory Photography';
		$layout['twitter_card'] 	= 'Chidory Photography';
		
		view()->share('layout', $layout);
	}

	public function home() {
		$now 		= Carbon::now();
		$slider 	= WebConfig::where('type', 'slider')->active($now)->get();
		$category 	= WebConfig::where('type', 'category')->active($now)->get();

		$video 		= WebConfig::where('type', 'video')->active($now)->first();
		$testimony 	= WebConfig::where('type', 'testimony')->active($now)->get();

		return view('web.v2.pages.home', compact('slider', 'category', 'video', 'testimony'));
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
		return view('web.v2.pages.about');
	}

	public function contact() {
		$now 		= Carbon::now();
		$category 	= WebConfig::where('type', 'category')->active($now)->get();

		return view('web.v2.pages.contact', compact('category', 'now'));
	}

	public function tell() {
		
		Mail::to('chidoryphotography@gmail.com')->send(new ContactUs(request()->only(['name', 'email', 'phone', 'category', 'date'])));

		return redirect()->route('showcase.contact');
	}

	public function story($id = null) {
		$now 		= Carbon::now();
		$content 	= WebContent::active($now)->where('id', $id)->first();

		return view('web.v2.pages.story', compact('content'));
	}
}
