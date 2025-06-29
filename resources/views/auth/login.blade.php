<x-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('login_store') }}" method="POST">
				@csrf
				@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
				@endif
				@if(session('error'))
				<div class="alert alert-danger">
					{{ session('error') }}
				</div>
				@endif
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
						value="{{ old('email') }}">
					@error('email')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Wachtwoord</label>
					<input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
						name="password">
					@error('password')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary">Verzenden</button>
			</form>

		</section>
	</main>
</x-layout>