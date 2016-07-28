<?php

namespace CoderStudios\Requests;

use App\Http\Requests\Request;

class FeedbackRequest extends Request {

	/**
	 * Determine if the user is authorised to make this request.
	 *
	 * @return boolean
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			'name' 						=> 'required',
			'email' 					=> 'required|email',
			'message' 					=> 'required',
			'g-recaptcha-response' 		=> 'required|recaptcha',
			'clear'						=> 'size:0|present',
		];

		return $rules;
	}

	/**
	 * Override the default error messages.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [

			'name.required' 		=> 'You must enter your name.',
			'email.required' 		=> 'You must enter your email address.',
			'message.required' 		=> 'You must enter a message.',
			'g-recaptcha-response.required' => '',

		];
	}
}