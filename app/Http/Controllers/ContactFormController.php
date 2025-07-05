<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
       return view('pages.contact'); 
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Store message in DB
        ContactForm::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'message' => $validated['message'],
        ]);

        Mail::to('your@email.com')->send(
            new ContactFormMail(
            $validated['name'],
            $validated['email'],
            $validated['message']
            )
        );

        return back()->with('success', __('Thank you for your message! We will contact you soon.'));
        
    }
}
