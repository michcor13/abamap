<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // return implode(', ',$request->material);
        $mailData = [
            'title' => $request->asunto??'Contacto Abamap',
            'body' => $request->mensaje??'',
            'material' => $request->material??''
        ];
        try {
            $senMail = Mail::to($request->email)->send(new SendMail($mailData));
            $respuesta = [
                'status' => 'success',
                'mensaje' => 'Se envió el correo con éxito.'
            ];
            return response()->json($respuesta);
        } catch (Exceptio $e) {
            $respuesta = [
                'status' => 'success',
                'mensaje' => 'Se envió el correo con éxito.'
            ];
            return response()->json($respuesta);
        }
    }
}
