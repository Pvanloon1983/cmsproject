<x-guest-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('login_store') }}" method="POST">
				<h3 class="form-title">{{ __('Login') }}</h3>
				@csrf

				<x-alert type="success" session="status" />
				<x-alert type="success" session="success" />
				<x-alert type="danger" session="error" />
				<x-alert type="danger" error="email_forgotpassword" />

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
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked'
						: '' }}>
					<div class="remember-me-forgot">
						<label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
						<span><a href="{{ route('password.request') }}">{{ __('Forgot Password') }}</a></span>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">
					<span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
					<span class="btn-text">{{ __('Submit') }}</span>
				</button>
			</form>

		</section>
	</main>
</x-guest-layout>