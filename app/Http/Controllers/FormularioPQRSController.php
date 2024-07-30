<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormularioPQRSController extends Controller
{
    public function enviarPQRS(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'numero_cc' => 'required',
            'correo' => 'required|email',
            'tel' => 'required',
            'mensaje' => 'required',
            'selec_pqrs' => 'required',
            'objeto_pqrs' => 'required',
            'hechos_text_area' => 'required',
            'tipo_documento' => 'required',
            'departamento' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
        ]);
        try {
            $data = $request->all();
            $recipients = ['castillomigueleduardo64@gmail.com'];

            foreach ($recipients as $recipient) {
                Mail::send('enviarpqrs', $data, function ($message) use ($recipient) {
                    $message->to($recipient)
                        ->subject('Nueva PQRS recibida');
                });
            }
            // Mensaje de éxito
            $status = 'success';
            $message = 'Correo enviado correctamente.';
        } catch (\Exception $e) {
            // Mensaje de error
            $status = 'error';
            $message = 'No se pudo enviar el correo. Inténtalo de nuevo más tarde.';
        }

        return redirect()->route('formulario.pqrs')->with('status', $status)->with('message', $message);
    }
}
