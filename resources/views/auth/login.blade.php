<x-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('login_store') }}" method="POST">
				<h1 class="form-title">{{ __('Login') }}</h1>
				@csrf
				@if(session('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
				@if(session('error'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					{{ session('error') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
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
				<button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
			</form>

		</section>
	</main>
</x-layout>