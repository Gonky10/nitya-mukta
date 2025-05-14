<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'servicio' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        // Aquí puedes agregar la lógica para enviar el email o guardar en base de datos

        return redirect()->back()->with('success', 'Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.');
    }
}
