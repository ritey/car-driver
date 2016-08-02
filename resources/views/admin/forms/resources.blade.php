@include('admin.partials.errors')
<form class="form-horizontal" method="{{ $vars['method'] }}" action="{{ $vars['action_url'] }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<div class="form-group">
		<label class="col-sm-2 control-label" for="name">Name</label>
		<div class="col-sm-8">
			<input type="text" id="name" name="name" class="form-control" value="{{ $vars['item']->name or '' }}" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="slug">SEO Url</label>
		<div class="col-sm-8">
			<input type="text" id="slug" name="slug" class="form-control" placeholder="Use hyphens for spaces e.g. {{ str_replace(' ','-',strtolower($vars['item']->name)) }}" value="{{ $vars['item']->slug or '' }}" />
			<p class="help-block">Leave blank to use the auto generated SEO Url</p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="meta_description">Meta Description</label>
		<div class="col-sm-8">
			<input type="text" id="meta_description" name="meta_description" class="form-control" value="{{ $vars['item']->meta_description or '' }}" />
			<p class="help-block">A short sentence to describe the page for good search results.</p>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="summary">Summary</label>
		<div class="col-sm-8">
			<input type="text" id="summary" name="summary" class="form-control" value="{{ $vars['item']->summary or '' }}" />
			<p class="help-block">A short summary to describe the page.</p>
		</div>
	</div>

	<div class="row">

		<div class="col-sm-6">

			<div class="form-group">
				<label class="col-sm-4 control-label" for="meta_title">Meta title</label>
				<div class="col-sm-8">
					<input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ $vars['item']->meta_title or '' }}" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-4 control-label" for="meta_author">Meta author</label>
				<div class="col-sm-4">
					<input type="text" id="meta_author" name="meta_author" class="form-control" value="{{ $vars['item']->meta_author or '' }}" />
				</div>
			</div>

		</div>

		<div class="col-sm-6">

			<div class="form-group">
				<label class="col-sm-4 control-label" for="meta_date">Meta date</label>
				<div class="col-sm-4">
					<input type="text" id="meta_date" name="meta_date" class="form-control" value="{{ $vars['item']->meta_date or '' }}" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-4 control-label" for="live_at">Live date</label>
				<div class="col-sm-4">
					<input type="text" id="live_at" name="live_at" class="form-control" value="{{ $vars['item']->live_at or '' }}" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-4 control-label" for="sort_order">Sort order</label>
				<div class="col-sm-4">
					<input type="text" id="sort_order" name="sort_order" class="form-control" value="{{ $vars['item']->sort_order or '0' }}" />
				</div>
			</div>

		</div>

	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="content">Description</label>
		<div class="col-sm-8">
			<textarea id="body" name="body" rows="5" class="form-control editor">{{ $vars['item']->body or '' }}</textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="checkbox">
				<label for="enabled">
					<input type="checkbox" id="enabled" name="enabled" value="1" {{ $vars['item']->enabled == 1 ? 'checked' : '' }} /> Enabled
				</label>
			</div>
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-8 col-sm-offset-2">
			<button type="submit" class="btn btn-primary">{{ $vars['button_text'] }}</button>
		</div>
	</div>

</form>

@section('footer')
<script type="text/javascript">
$('document').ready(function() {

	var config = {
		toolbar:[
			['Bold', 'Italic', '-', 'Link', 'Unlink', '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' , '-', 'Table', 'Undo', '-', 'Source'],

		]
	};

	config.allowedContent = {
	    $1: {
	        // Use the ability to specify elements as an object.
	        elements: CKEDITOR.dtd,
	        attributes: true,
	        styles: true,
	        classes: true
	    }
	};
	config.disallowedContent = 'script; *[on*]';
	config.contentsCss = [ '{{ elixir("css/app.css") }}' , CKEDITOR.basePath + 'contents.css' ];

    $( 'textarea.editor' ).ckeditor(function(){}, config);
});
</script>
@endsection