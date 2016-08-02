@extends('admin.layouts.master')

@section('page_title')
{{ $vars['page_title'] }}
@endsection

@section('meta_description')

@endsection

@section('header')
@endsection

@section('content')

<div class="container">

	<div class="row">

		<div class="col-sm-12">

			<h1>{{ $vars['title'] }}</h1>

			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right text-right">
						<a class="btn btn-sm btn-success" href="{{ $vars['add_url'] }}"><span class="fa fa-plus"></span> Add</a>
					</div>
				</div>
			</div>

			<hr>

			@include($vars['include_path'], ['vars' => $vars])

		</div>

	</div>

</div>

@endsection

@section('footer')
@endsection