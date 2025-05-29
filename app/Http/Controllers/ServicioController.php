<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $services = Service::where('active', true)->get();
        return view('servicios', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->where('active', true)->firstOrFail();

        // Si es coaching ontológico, usar la vista específica
        if ($slug === 'coaching-ontologico') {
            return view('servicios.coaching-ontologico', compact('service'));
        }

        return view('servicios.detalle', compact('service'));
    }
}
