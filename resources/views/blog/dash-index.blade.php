<x-dashboard-layout title="Blog Posts">

	<div class="container-fluid p-3">
		<div class="mb-3 text-center">
			<h3>All Blog Posts</h3>

			<div class="table-responsive">
			<table class="table">
				<div class="d-flex justify-content-end">
					<a href="{{ route('blog.create') }}">
						<button class="btn btn-sm btn-primary">Create New Post</button>
					</a>
				</div>
				<hr>
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Image</th>
					<th style="min-width: 300px;" scope="col">Title</th>
					<th style="min-width: 300px;" scope="col">Slug</th>
					<th style="min-width: 100px;" scope="col">Created</th>
					<th scope="col">Published</th>
					<th style="min-width: 100px;" scope="col" colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($blogposts as $blogpost)
				<tr>
					<td>{{ $blogpost->id }}</td>
					<td><img width="50px" src="{{ $blogpost->image }}" alt="{{ $blogpost->title }}"></td>
					<td>{{ $blogpost->title }}</td>
					<td>{{ $blogpost->slug }}</td>
					<td>
						@if ($blogpost->published == '1')
							<span class="badge rounded-pill text-bg-success text-white">Yes</span>
						@else
							<span class="badge rounded-pill text-bg-danger text-white">No</span>
						@endif
					</td>
					<td>{{ $blogpost->created_at->format("d-m-Y") }}</td>
					<td>						
							<a href="{{ route('blog.show', $blogpost->slug) }}" target="_blank"><i class="fa-solid fa-eye text-primary"></i></a>
					</td>
					<td>
						<a href="#"><i class="fa-solid fa-pen-to-square edit text-warning"></i></a>
					</td>
					<td>
						<a href="#"><i class="fa-solid fa-trash text-danger"></i></a>
					</td>
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