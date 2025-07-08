<x-dashboard-layout title="Dashboard">

	<div class="container-fluid p-3">
		<div class="mb-3">
			<h3>{{ __('Edit profile') }}</h3>
			<form class="form-profile" action="{{route('profile.update')}}" method="POST">
				@method('PUT')
				@csrf
				<x-alert type="success" session="success" />
				<div class="mb-3">
					<label for="first_name" class="form-label">{{ __('First Name') }}</label>
					<input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
						name="first_name" value="{{ old('first_name', $user->first_name ?? '') }}">
					@error('first_name')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="last_name" class="form-label">{{ __('Last Name') }}</label>
					<input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
						name="last_name" value="{{ old('last_name', $user->last_name ?? '') }}">
					@error('last_name')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="email" class="form-label">{{ __('Email') }}</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
						value="{{ old('email', $user->email ?? '') }}">
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
				<div class="submit-login">	
					<button type="submit" class="btn btn-primary">
						<span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
						<span class="btn-text">{{ __('Update') }}</span>
					</button>
				</div>
			</form>
	</div>

</x-dashboard-layout>