<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('active', true)->get();
        return view('servicios', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('active', true)
            ->firstOrFail();

        $data = [
            'titulo' => $service->name,
            'subtitulo' => $service->subtitle,
            'imagen' => $service->image,
            'descripcion' => $service->description,
            'beneficios' => $service->benefits,
            'galeria' => $service->gallery,
            'testimonios' => $service->testimonials
        ];

        return view('servicios.detalle', $data);
    }

    public function coaching()
    {
        return $this->show('coaching');
    }

    public function reiki()
    {
        return $this->show('reiki');
    }

    public function ritoUtero()
    {
        return $this->show('rito-utero');
    }

    public function tarjetaCuantica()
    {
        return $this->show('tarjeta-cuantica');
    }

    public function aromaterapia()
    {
        return $this->show('aromaterapia');
    }

    public function mujerSagrada()
    {
        return $this->show('mujer-sagrada');
    }
}
