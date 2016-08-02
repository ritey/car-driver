<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use CoderStudios\Requests\ResourcesRequest;
use CoderStudios\Models\Articles;
use CoderStudios\Models\Uploads;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Repository as Cache;
use Storage;

class ResourcesController extends BaseController {

	public function __construct(Request $request, Articles $resources, Cache $cache, Uploads $upload)
	{
		$this->request = $request;
		$this->resource = $resources;
		$this->cache = $cache;
		$this->upload = $upload;
	}

	protected function getImage($image)
	{
		$ch =  curl_init($image);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$ch = null;
		return $result;
	}

	protected function saveImage($resource, $image)
	{
		$name = basename($image);
		$new_name = md5(basename($image) . date('Y-m-d'));

		if (!file_exists(storage_path('app/uploads/' . $resource->id) . '/' . $name)) {

			$result = Storage::put('uploads/' . $resource->id . '/' . $name, $this->getImage($image));

			$meta = pathinfo(storage_path('app/uploads/' . $resource->id . '/' . $name));

			Storage::copy('uploads/' . $resource->id . '/' . $name, 'uploads/' . $resource->id . '/' . $new_name . '.' . $meta['extension']);

            $data = [];
            $data['filename'] = basename($image);
            $data['maskname'] = $new_name;
            $data['extension'] = $meta['extension'];
            $data['size'] = filesize(storage_path('app/uploads/' . $resource->id) . '/' . $new_name . '.' . $meta['extension']);
            $data['folder'] = $resource->id;
            $this->upload->create($data);

            $meta = null;
            $data = null;
            $result = null;
		}
		$resource = null;
		$image = null;
		return true;
	}

	public function index()
	{
		$vars = [
			'page_title'		=> 'Blog Index',
			'title' 			=> 'Posts',
			'include_path'		=> 'admin.partials.blog-index',
			'add_url'			=> route('admin.blog.create'),
			'resources'			=> $this->resource->all(),
		];
		return view('admin.pages.blog-index', compact('vars'));
	}

	public function create()
	{
		$item = $this->resource->newInstance();
		if ($this->request->old('name')) {
			foreach($item->getFillable() as $key => $value) {
				$item->$value = $this->request->old($value);
			}
		}
		$vars = [
			'page_title' 		=> 'New post',
			'title' 			=> 'Add post',
			'include_path'		=> 'admin.forms.resources',
			'method'			=> 'POST',
			'action_url'		=> route('admin.blog.store'),
			'add_url'			=> route('admin.blog.create'),
			'button_text'		=> 'Add',
			'item' 				=> $item,
		];
		return view('admin.pages.blog-index', compact('vars'));
	}

	public function store(ResourcesRequest $request)
	{
		$data = $request->only(
			'enabled',
	        'sort_order',
	        'name',
	        'car_type_id',
	        'price',
	        'fuel',
	        'year',
	        'colour',
	        'reg',
	        'mileage',
	        'meta_description',
	        'content',
	        'gearbox',
	        'doors',
	        'slug'
	    );
		$resource = $this->resource->create($data);
		$this->cache->flush();

		return redirect()->route('admin.blog.index')->with('success_message','Post created');
	}

	public function edit($id)
	{
		$resource = $this->resource->where('id',$id)->first();
		$vars = [
			'page_title' 		=> 'Edit post',
			'title' 			=> 'Edit post',
			'include_path'		=> 'admin.forms.resources',
			'method'			=> 'POST',
			'action_url'		=> route('admin.blog.update', ['id' => $id]),
			'add_url'			=> route('admin.blog.create'),
			'button_text'		=> 'Save',
			'item' 				=> $resource,
		];
		return view('admin.pages.blog-index', compact('vars'));
	}

	public function view($id)
	{
		$resource = $this->resource->where('id',$id)->first();
		$vars = [
			'page_title' 		=> 'Vehicle : ' . $resource->name,
			'title' 			=> 'Vehicle : ' . $resource->name,
			'item' 				=> $resource,
		];
		return view('admin.pages.post', compact('vars'));
	}

	public function update(ResourcesRequest $request, $id)
	{
		$data = $request->only(
			'enabled',
	        'sort_order',
	        'name',
	        'car_type_id',
	        'price',
	        'fuel',
	        'year',
	        'colour',
	        'reg',
	        'mileage',
	        'meta_description',
	        'content',
	        'gearbox',
	        'doors',
	        'slug'
	    );
	    if (empty($data['slug'])) {
	    	$data['slug'] = str_replace(' ', '-', strtolower($data['name']));
	    } else {
	    	$data['slug'] = str_replace(' ', '-', strtolower($data['slug']));
	    }
		$resource = $this->resource->find($id);
		$resource->update($data);
		$this->cache->flush();
		return redirect()->route('admin.blog.index')->with('success_message','Post updated');
	}

	public function destroy($id)
	{
		$resource = $this->resource->find($id);
		if ($resource) {
			$resource->delete();
			$this->cache->flush();
			return redirect()->route('admin.blog.index')->with('success_message','Post deleted');
		}
		return redirect()->route('admin.blog.index')->with('error_message','Post not found');
	}
}