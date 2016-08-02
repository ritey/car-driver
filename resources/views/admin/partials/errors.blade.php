@if ($errors->any())
<div class="row">

	<div class="col-sm-4 col-sm-offset-4">
    	<div class="alert alert-warning" role="alert">

			<strong>Please check the form for the following errors:</strong>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>

    	</div>
    </div>

</div>
@endif