<x-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('password.email') }}" method="POST">
				<h1 class="form-title ">{{ __('Reset Password') }}</h1>
				@csrf
				@if (session('status'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ session('status') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
				@endif
				@if ($errors->has('email'))
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
								{{ $errors->first('email') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
				@endif
				<div class="mb-3">
					<label for="email" class="form-label">{{ __('Email') }}</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
						value="{{ old('email') }}">
					@error('email')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
			</form>
		</section>
	</main>
</x-layout>