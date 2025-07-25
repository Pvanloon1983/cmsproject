<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
        return (new MailMessage)
                ->subject('Verify Email Address')
                ->view('mails.verify-email', [
                    'user' => $notifiable,
                    'url' => $url,
                ]);

        });

        View::composer('dashboard-layout', function ($view) {
            $view->with('user', auth()->user());
        });
    }
}
