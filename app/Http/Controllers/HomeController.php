<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Subscribe;

class HomeController extends Controller
{
	public function home() 
	{
		$live 	= Carbon::parse('last day of October 2018')->endOfDay();
		$today 	= Carbon::now();

		return view('coming', compact('live', 'today'));
	}

	public function subscribe() 
	{
		$data 	= request()->only('email');
		$subscribe 		= Subscribe::where('email', $data['email'])->first();

		if(!$subscribe){
			$subscribe 	= new Subscribe;
		}

		$subscribe->fill($data);
		$subscribe->save();

		return redirect('/');
	}
}
