<?php

namespace CoderStudios\Composers;

use Session;
use Illuminate\Contracts\View\View;

class AdminMasterComposer {

    /*
    |--------------------------------------------------------------------------
    | Admin Master Composer Class
    |--------------------------------------------------------------------------
    |
    | Loads variables for the master layout in one place
    |
    */

    public function __construct()
    {

    }

	public function compose(View $view)
	{
		$view->with('success_message', Session::pull('success_message'));
		$view->with('error_message', Session::pull('error_message'));
		$view->with('csrf_error', Session::pull('csrf_error'));
	}
}