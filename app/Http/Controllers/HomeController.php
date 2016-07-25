<?php

namespace App\Http\Controllers;

use Request;
use Response;

class HomeController extends Controller {

	public function index()
	{
		return view('welcome');
	}

	public function about()
	{
		return view('about');
	}

	public function contact()
	{
		return view('contact');
	}

	public function legals()
	{
		return view('legals');
	}

	public function login()
	{
		return view('login');
	}

	public function services()
	{
		return view('services');
	}

	public function feedback()
	{
		return view('feedback');
	}

	public function blog()
	{
		return view('blog');
	}
}