<x-layout>
    <main>
        <section class="container">
						<div class="email-verification">
							@if(session('success'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ session('success') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
							@endif
							<h1 class="form-title text-center">{{ __('Please check your email and click the verification link to activate your account.') }}</h1>
							<p>{{ __('Didn’t receive the email?') }}</p>
							<p>
									<span>{{ __('Check your spam folder') }}</span>
									{{ __(' or') }}
									<a href="{{ route('verification.send') }}">{{ __('click here to resend the email') }}</a>.
							</p>
						</div>
        </section>
    </main>
</x-layout>