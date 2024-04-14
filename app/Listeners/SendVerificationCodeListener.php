<?php

namespace App\Listeners;

use App\Events\SendVerificationCode;
use App\Mail\VerificationCodeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendVerificationCodeListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendVerificationCode $event)
    {
        $verificationCode = rand(1000, 9999);
        Session::put('verification_code', $verificationCode);
        Session::put('verification_email', $event->email);
        Mail::to($event->email)->send(new VerificationCodeMail($verificationCode));
    }
}
