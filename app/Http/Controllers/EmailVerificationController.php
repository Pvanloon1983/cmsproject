<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function emailVerificationNotice() {
        return view('auth.verify-email');
    }

    public function emailVerificationHandler(EmailVerificationRequest $request) {
        $request->fulfill();
 
        return redirect()->route('dashboard')->with('success', __('You are successfully verified!'));
    }

    public function emailResendHandler(Request $request) {
        $request->user()->sendEmailVerificationNotification();
 
        return back()->with('success', __('Verification link sent!'));
    }
}
