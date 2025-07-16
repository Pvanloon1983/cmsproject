<x-dashboard-layout title="Blog Posts">

	<div class="container-fluid p-3">
		<div class="mb-3">
			<h3>Create Blog Post</h3>
			<div class="row">
				<form action="#" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="col-4">
						<div class="mb-3">
							<label for="title" class="form-label">Title</label>
							<input type="text" class="form-control" id="title" name="title">
						</div>
						<div class="mb-3">
							<label for="content" class="form-label">Content</label>
							<textarea class="form-control" id="content" rows="3" name="content"></textarea>
						</div>
						<div class="mb-3">
							<label for="image" class="form-label">Image</label>
							<input class="form-control" type="file" id="image" name="image">
						</div>
						<div class="mb-3">
							<label for="published" class="form-label">Published</label>
							<select class="form-select" aria-label="published" name="published" id="published">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
							<span class="btn-text">{{ __('Submit') }}</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</x-dashboard-layout>