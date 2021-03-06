<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use CoderStudios\Helpers\ImageHelper;
use Illuminate\Filesystem\Filesystem;

class ImageController extends BaseController {

	public function __construct(ImageHelper $image, Filesystem $file, Request $request)
	{
		$this->image = $image;
		$this->file = $file;
		$this->request = $request;
	}

	public function index()
	{
		$width = 100;
		$height = 100;
		$filename = 'holding-image.png';
		$folder = '';

		if ($this->request->input('filename')) {
			$filename = $this->request->input('filename');
		}

		if ($this->request->input('folder')) {
			$folder = $this->request->input('folder');
		}

		if ($this->request->input('width')) {
			$width = $this->request->input('width');
		}

		if ($this->request->input('height')) {
			$height = $this->request->input('height');
		}

		$image = $this->image->resize( $folder , $filename , $width , $height );
		$info = pathinfo($image);
		$extension = isset($info['extension']) ? $info['extension'] : 'png';
		$image = $this->file->get($image);

        return (new Response($image, 200))
              ->header('Content-Type', 'image/'.$extension);

	}

}