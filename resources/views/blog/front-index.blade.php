<x-guest-layout title="Home">
	<main>
		<section class="container">
			<div class="py-4">
			<h1 class="text-center mb-5">Blog</h1>
				<div class="row">
					@foreach ($blogposts as $blogpost)
					<div class="col-3 mb-5">
						<div class="card h-100 d-flex flex-column" style="width: 18rem;">
							<img src="{{ $blogpost->image }}" class="card-img-top" alt="{{ $blogpost->title }}">
							<div class="card-body d-flex flex-column">
								<h5 class="card-title">{{ $blogpost->title }}</h5>
								<div class="mb-2 d-flex justify-content-between">
									<span>By {{ $blogpost->user->first_name }}</span>
									<span>{{ $blogpost->created_at->format("d F 'y") }}</span>
								</div>
								<p class="card-text flex-grow-1">{{ \Illuminate\Support\Str::words($blogpost->content, 10) }}</p>
								<a href="blog/{{ $blogpost->slug }}" class="btn btn-primary mt-auto">Read more</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="justify-content-center">
					{{ $blogposts->links('pagination::bootstrap-5') }}
				</div>
			</div>
		</section>
	</main>
</x-guest-layout>