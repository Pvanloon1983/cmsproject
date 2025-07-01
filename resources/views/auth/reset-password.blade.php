<x-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('password.update') }}" method="POST">
				<h1 class="form-title ">{{ __('Change Password') }}</h1>
    		@csrf
    		<input type="hidden" name="token" value="{{ $token }}">
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
							value="{{ old('email', $email ?? '') }}">
					@error('email')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">{{ __('Password') }}</label>
					<input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
						name="password">
					@error('password')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
					<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
						id="password_confirmation" name="password_confirmation">
					@error('password_confirmation')
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