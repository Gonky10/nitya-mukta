<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
    public function enviarMensaje(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'servicio' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        try {
            Mail::to('goncalvesnicolas1000@gmail.com')->send(new ContactoMail($request->all()));

            return redirect()->back()->with('success', '¡Gracias por tu mensaje! Te responderemos a la brevedad.');
        } catch (\Exception $e) {
            Log::error('Error al enviar email de contacto: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente más tarde.');
        }
    }
}
