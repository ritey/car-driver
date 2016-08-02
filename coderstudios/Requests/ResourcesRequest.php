<?php

namespace CoderStudios\Requests;

use App\Http\Requests\Request;

class ResourcesRequest extends Request {

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
			'name'				=> 'required|max:128',
			'enabled'			=> 'numeric',
			'meta_description'	=> 'max:256',
			'slug'				=> 'unique:articles,slug,' . $this->route()->getParameter('id'),
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
		return [];
	}
}