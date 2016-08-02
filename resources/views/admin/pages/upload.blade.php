@extends('admin.layouts.master')

@section('page_title')
Upload a new file
@endsection

@section('meta_description')

@endsection

@section('header')

@endsection

@section('content')

<div class="content">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-lg-12">

                <div class="panel panel-default">

                    <div class="panel-body">

                        <form action="{{ route('admin.save-upload') }}" method="post" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="id" value="{{ $id or ''}}" />
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>

                        <hr />

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Image</th>
                                <th>Filename</th>
                                <th></th>
                            </tr>
                            @foreach($files as $item)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ route('image') }}?folder={{ $item->folder }}&filename={{ urlencode($item->maskname . '.' . $item->extension) }}&width=100&height=50" alt="" />
                                </td>
                                <td>{{ $item->maskname }}.{{ $item->extension }}</td>
                                <td class="text-center"><a href="{{ route('admin.upload.delete', ['id' => $item->id]) }}" class="btn btn-default">Delete</a></td>
                            </tr>
                            @endforeach

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@section('footer')

<script type="text/javascript">

$('document').ready(function(){
    Dropzone.options.myAwesomeDropzone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 2000, // MB
      uploadMultiple: true,
      success:function(result, response) {
        document.location = response.path;
      }
    };
});
</script>

@endsection