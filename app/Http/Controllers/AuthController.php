<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterPage() {
        return view('auth.register');
    }

    public function registerUser(Request $request) {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'first_name.required' => 'Voornaam is verplicht.',
            'last_name.required' => 'Achternaam is verplicht.',
            'email.required' => 'E-mailadres is verplicht.',
            'email.email' => 'Voer een geldig e-mailadres in.',
            'email.unique' => 'Dit e-mailadres is al geregistreerd.',
            'password.required' => 'Wachtwoord is verplicht.',
            'password.min' => 'Wachtwoord moet minimaal 8 tekens bevatten.',
            'password.confirmed' => 'Wachtwoorden komen niet overeen.',
        ]);

        // Create the user using Hash facade for password hashing (Laravel 12 best practice)

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Optionally log the user in
        auth()->login($user);

        // Redirect to dashboard
        return redirect()->route('dashboard')->with('success', 'Registratie is gelukt!');

    }

    public function showLoginPage(){
        return view('auth.login');
    }

    public function loginUser(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'E-mailadres is verplicht.',
            'email.email' => 'Voer een geldig e-mailadres in.',
            'password.required' => 'Wachtwoord is verplicht.',
        ]);

        if (auth()->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Je bent ingelogd!');
        }

        return back()->with('error', 'De inloggevens kloppen niet.');
    }


    public function logout() {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Je bent uitgelogd.');
    }
}
