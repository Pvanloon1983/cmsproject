<x-guest-layout title="Home">
	<main>
		<section class="container">
			<div class="py-4">
				<div class="row">
				<p>
					<a href="{{ route('blog') }}"><- Go back to all posts</a>
				</p>
				<div class="col-12 d-flex justify-content-center mb-4">
					<img style="width:100%; height:300px; object-fit:cover;" src="{{ $blogpost->image }}" alt="{{ $blogpost->title }}">
				</div>
				<div style="max-width: 900px;margin: 0 auto;">
					<h1 class="text-center mb-4">{{ $blogpost->title }}</h1>
					<p class="text-center">{{ $blogpost->content }}</p>
					</div>
				</div>
			</div>
		</section>
	</main>
</x-guest-layout>