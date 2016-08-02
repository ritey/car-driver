<div class="row">
	<div class="col-sm-12">
		<table class="table table-striped table-bordered table-hover table-responsive">
			<thead>
				<tr>
					<th>Name</th>
					<th>Enabled</th>
					<th>Created at</th>
					<th>Updated at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@forelse($vars['resources'] as $item)
				<tr>
					<td>{{ $item->name }}</td>
					<td>{{ $item->enabled == 1 ? 'Yes' : 'No' }}</td>
					<td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
					<td>{{ $item->updated_at->format('d.m.Y H:i') }}</td>
					<td class="text-center">
						<a class="btn btn-sm btn-info" href="{{ route('admin.upload', ['id' => $item->id]) }}">Images</a>
						<a class="btn btn-sm btn-default" href="{{ route('admin.blog.edit', ['id' => $item->id]) }}">Edit</a>
						<a class="btn btn-sm btn-danger" href="javascript:if(confirm('Are you sure you want to delete this post?')){ document.location='{{ route('admin.blog.delete', ['id' => $item->id]) }}';}">Delete</a>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="8">No posts found!</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>