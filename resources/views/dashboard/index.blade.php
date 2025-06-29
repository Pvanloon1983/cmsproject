<x-layout title="Dashboard">
	<main>
		<section class="container">
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
			Dashboard
		</section>
	</main>
</x-layout>