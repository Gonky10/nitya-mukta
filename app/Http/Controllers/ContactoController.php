<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

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

        $datos = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'servicio' => $request->servicio,
            'mensaje' => $request->mensaje,
        ];

        Mail::to('yoganityamukta@gmail.com')->send(new ContactoMail($datos));

        return redirect()->back()->with('success', '¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
    }
}
