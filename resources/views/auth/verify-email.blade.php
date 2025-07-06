<x-guest-layout>
    <main>
        <section class="container">
						<div class="email-verification">

							<x-alert type="success" session="success" />
							<x-alert type="danger" error="email" />

							<h3 class="form-title text-center">{{ __('Please check your email and click the verification link to activate your account.') }}</h3>
							<p>{{ __('Didn’t receive the email?') }}</p>
							<p>
									<span>{{ __('Check your spam folder') }}</span>
									{{ __(' or') }}
									<a href="{{ route('verification.send') }}">{{ __('click here to resend the email') }}</a>.
							</p>
						</div>
        </section>
    </main>
</x-guest-layout>