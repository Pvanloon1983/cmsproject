<x-layout title="Dashboard">
	<main>
		<section class="container">
			@if(session('success'))
				<div class="dashboard-alert alert alert-success alert-dismissible fade show" role="alert">
					{{ session('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
			Dashboard
		</section>
	</main>
</x-layout>