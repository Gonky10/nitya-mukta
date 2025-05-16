<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'servicio' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        try {
            Mail::to('yoganityamukta@gmail.com')
                ->send(new ContactoMail($datos));

            Log::info('Correo de contacto enviado', [
                'nombre' => $datos['nombre'],
                'email' => $datos['email']
            ]);

            return redirect()
                ->back()
                ->with('success', 'Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.');
        } catch (\Exception $e) {
            Log::error('Error al enviar correo de contacto', [
                'error' => $e->getMessage(),
                'datos' => $datos
            ]);

            return redirect()
                ->back()
                ->with('error', 'Lo sentimos, hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente más tarde.')
                ->withInput();
        }
    }
}
