<x-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('password.update') }}" method="POST">
				<h3 class="form-title">{{ __('Reset Your Password') }}</h3>
    		@csrf
    		<input type="hidden" name="token" value="{{ $token }}">

				<x-alert type="success" session="status" />
				<x-alert type="danger" error="email_forgotpassword" />

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
				<button type="submit" class="btn btn-primary">
					<span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
					<span class="btn-text">{{ __('Submit') }}</span>
				</button>
			</form>

		</section>
	</main>
</x-layout>