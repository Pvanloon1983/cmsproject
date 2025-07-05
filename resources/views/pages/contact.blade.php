<x-layout>
	<main>
		<section class="container">
			<form class="auth-form" action="{{ route('contact.submit') }}" method="POST">
				<h3 class="form-title">{{ __('Contact') }}</h3>
				@csrf

				<x-alert type="success" session="success" />

				<div class="mb-3">
					<label for="name" class="form-label">{{ __('Name') }}</label>
					<input type="test" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
						value="{{ old('name') }}">
					@error('name')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>

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
					<label for="message" class="form-label">{{ __('Message') }}</label>
					<textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3">{{ old('message') }}</textarea>
					@error('message')
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