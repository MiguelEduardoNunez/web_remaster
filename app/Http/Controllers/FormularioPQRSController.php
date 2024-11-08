<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormularioPQRSController extends Controller
{
    public function enviarpqrs(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'nombre' => 'required|string|min:10',
            'numero_cc' => 'required|numeric|min:5',
            'correo' => 'required|email',
            'tel' => 'required',
            'mensaje' => 'required|string|min:10',
            'selec_pqrs' => 'required',
            'objeto_pqrs' => 'required',
            'hechos' => 'required|string|min:20',
            'tipo_documento' => 'required',
            'departamento' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
        ]);
        try {
            $data = $request->all();
            $recipients = ['castillomigueleduardo64@gmail.com', 'noc@sepcom.com.co', 'info@sepcom.com.co', 'sst@sepcom.com.co'];
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
            $message = 'No se pudo enviar el correo. Intentelo de nuevo mas tarde.';
        }

        return redirect()->route('formulario.pqrs')->with('status', $status)->with('message', $message);
    }
}
