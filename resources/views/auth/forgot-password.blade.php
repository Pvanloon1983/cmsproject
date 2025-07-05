<x-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('password.email') }}" method="POST">
				<h3 class="form-title ">{{ __('Reset Password') }}</h3>
				@csrf

				<x-alert type="success" session="status" />
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
				<button type="submit" class="btn btn-primary">
					<span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
					<span class="btn-text">{{ __('Submit') }}</span>
				</button>

			</form>
		</section>
	</main>
</x-layout>