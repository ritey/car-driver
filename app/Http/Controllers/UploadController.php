<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use CoderStudios\Requests\UploadRequest;
use CoderStudios\Models\Uploads;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Auth;
use Session;

class UploadController extends BaseController
{

    protected $upload;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Uploads $upload, Filesystem $file)
    {
        $this->middleware('auth');
        $this->user = Auth::user();
        $this->upload = $upload;
        $this->file = $file;
    }

    public function upload($id)
    {
        $files = $this->upload->where('folder',$id)->get();
        return view('admin.pages.upload',compact('id','files'));
    }

    public function destroy($id)
    {
        $file = $this->upload->where('id',$id)->first();
        $this->file->deleteDirectory('/uploads/'.$file->folder . '/cache');
        $this->file->delete('/uploads/'.$file->folder . '/' . $file->maskname . '.' . $file->extension);
        $this->upload->where('id',$id)->delete();
        return redirect()->route('admin.blog.index')->with('success_message','Image deleted');
    }

    public function postUpload(UploadRequest $request)
    {
        $files = $request->file('file');
        $json = [];
        foreach($files as $file) {
            $data = [];
            $data['filename'] = $file->getClientOriginalName();
            $data['maskname'] = md5($file->getClientOriginalName() . date('Y-m-d H:i:s'));
            $data['extension'] = $file->guessExtension();
            $data['size'] = $file->getClientSize();
            $data['folder'] = $request->input('id');
            if ($file->isValid()) {
                $upload = $this->upload->create($data);
                $result = $file->move(storage_path('app/uploads/'.$data['folder']), $data['maskname'] . '.' . $data['extension']);
                $json[] = ['result' => true];
            } else {
                $json[] = ['result' => false];
            }
        }

        $failed = 0;
        $success = 0;

        foreach($json as $item) {
            if (!$item['result']) {
                $failed++;
            }
        }

        $success = (count($json)-$failed);

        $message = $success . ' ' . str_plural('file',$success) . ' uploaded.';
        if ($failed > 0) {
            $message = $message . ' ' . $failed . ' ' . str_plural('file',$failed) . ' failed to upload.';
        }

        if ($success) {
            Session::put('success_message',$message);
            return response()->json(['result' => true, 'path' => route('admin.blog.index') ]);
        }

        return response()->json(['result' => false, 'path' => route('admin.upload') . '?result=false']);
    }
}