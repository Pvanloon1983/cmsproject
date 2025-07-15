<x-dashboard-layout title="Blog Posts">

	<div class="container-fluid p-3">
		<div class="mb-3 text-center">
			<h3>All Blog Posts</h3>

			<div class="table-responsive">
			<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Image</th>
					<th style="min-width: 300px;" scope="col">Title</th>
					<th style="min-width: 300px;" scope="col">Slug</th>
					<th scope="col">Published</th>
					<th style="min-width: 100px;" scope="col">Created</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($blogposts as $blogpost)
				<tr>
					<td>{{ $blogpost->id }}</td>
					<td><img width="100px" src="{{ $blogpost->image }}" alt="{{ $blogpost->title }}"></td>
					<td>{{ $blogpost->title }}</td>
					<td>{{ $blogpost->slug }}</td>
					<td>
						@if ($blogpost->published == '1')
							Yes
						@else
							No
						@endif
					</td>
					<td>{{ $blogpost->created_at->format("d-m-Y") }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
					<div class="justify-content-center">
					{{ $blogposts->links('pagination::bootstrap-5') }}
				</div>

		</div>
	</div>

</x-dashboard-layout>