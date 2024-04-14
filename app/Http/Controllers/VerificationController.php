<?php

namespace App\Http\Controllers;

use App\Events\SendVerificationCode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerificationController extends Controller
{
    public function showVerificationForm($error = null)
    {
        return view('auth.verification', ['error' => $error]);
    }
    public function sendVerificationCode(Request $request)
    {
        $lastRequestTime = Session::get('last_verification_code_request_time');

        if ($lastRequestTime && Carbon::now()->diffInSeconds($lastRequestTime) < 30) {
            return response()->json(['message' => 'Вы уже запрашивали код подтверждения менее 30 секунд назад. Попробуйте позже.'], 422);
        }

        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return response()->json(['message' => 'Пользователь с такой почтой уже зарегистрирован.'], 422);
        }

        event(new SendVerificationCode($request->email));

        Session::put('last_verification_code_request_time', now());

        return response()->json(['message' => 'Код подтверждения отправлен на вашу почту.']);
    }
    public function verifyCode(Request $request)
    {
        $enteredCode = intval($request->input('verification_code'));

        $savedCode = Session::get('verification_code');
        if ($enteredCode === $savedCode) {
            return redirect()->route('registerStepTwo');
        } else {
            return $this->showVerificationForm('Неверный код подтверждения');
        }
    }
}
