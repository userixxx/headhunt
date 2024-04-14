<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        if (auth()->check()) {
            return redirect('/');
        }
        return view('auth.register');
    }
    public function showRegistrationStepTwo()
    {
        if (auth()->check()) {
            return redirect('/');
        }
        return view('auth.registration');
    }

    public function processRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => Session::get('verification_email'),
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'account_type' => 'user',
            'account_status' => 'active',
            'city_id' => $request->city_id,
        ]);

        event(new Registered($user));

        auth()->login($user);

        return redirect()->route('home')->with('success', 'Успешная регистрация');
    }

}
