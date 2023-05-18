<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $mailData = [
            'title' => 'Contacto Abamap',
            'body' => $request->mensaje??'This is the body of test email.'
        ];

        $senMail = Mail::to($request->email)->send(new SendMail($mailData));
        return redirect()->route('contacto');
    }
}
