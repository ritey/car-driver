<?php

namespace App\Http\Controllers;
use CoderStudios\Requests\ContactRequest;
use CoderStudios\Requests\SubscribeRequest;
use CoderStudios\Requests\FeedbackRequest;
use App\Events\FeedbackSent;
use App\Events\Subscribed;
use App;

use Request;
use Response;

class HomeController extends Controller {

	 /**
     * Display home page
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		return view('welcome');
	}

	 /**
     * Display about page
     *
     * @return \Illuminate\Http\Response
     */
	public function about()
	{
		return view('about');
	}

	 /**
     * Display contact page
     *
     * @return \Illuminate\Http\Response
     */
	public function contact()
	{
		return view('contact');
	}

	 /**
     * Display legals page
     *
     * @return \Illuminate\Http\Response
     */
	public function legals()
	{
		return view('legals');
	}

	 /**
     * Display client login page
     *
     * @return \Illuminate\Http\Response
     */
	public function login()
	{
		return view('login');
	}

	 /**
     * Display services page
     *
     * @return \Illuminate\Http\Response
     */
	public function services()
	{
		return view('services');
	}

	 /**
     * Display feedback page
     *
     * @return \Illuminate\Http\Response
     */
	public function feedback()
	{
		return view('feedback');
	}

	public function sendFeedback(FeedbackRequest $request)
	{
		event(new FeedbackSent($request));
		return view('feedback-sent');
	}

	 /**
     * Subscribe an email address to the mail group.
     *
     * @return \Illuminate\Http\Response
     */
	public function subscribe(SubscribeRequest $request)
	{
		event(new Subscribed($request->only('email')));

		return Response::json(['success'=>1]);
	}

	 /**
     * Display xml sitemap
     *
     * @return \Illuminate\Http\Response
     */
	public function sitemap()
	{
		$sitemap = App::make('sitemap');

		$sitemap->setCache('laravel.sitemap',3600);

		if (!$sitemap->isCached()) {
			$sitemap->add(url('/'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/about'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/services'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/contact'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/feedback'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/blog'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/blog/car-driver-is-here'), '2016-07-04T12:00:00+02:00','1.0','monthly');
			$sitemap->add(url('/blog/mercedes-benz-world-amg-passenger-experience'), '2016-08-16T12:00:00+02:00','1.0','monthly');
		}

		return $sitemap->render('xml');
	}
}