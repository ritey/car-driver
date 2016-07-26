<?php

namespace CoderStudios\Requests;

use App\Http\Requests\Request;

class SubscribeRequest extends Request {

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
			'email' => 'required|email',
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

			'email.required' => 'You must enter a valid email address.',
			'email.email' => 'You must enter a valid email address.',

		];
	}
}