<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Cache\Repository as Cache;

class AdminController extends BaseController {

	public function __construct(Cache $cache)
	{
		$this->cache = $cache;
	}

	public function home()
	{
		$vars = [
			'page_title'			=> 'Admin Home',
		];
		return view('admin.pages.home', compact('vars'));
	}

	public function cache()
	{
		$this->cache->flush();
		return redirect()->route('admin.blog.index')->with('success_message','Cache cleared');
	}

}