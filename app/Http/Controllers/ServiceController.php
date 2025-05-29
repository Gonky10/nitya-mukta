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

        // Si es coaching ontológico, usar la vista específica
        if ($slug === 'coaching-ontologico') {
            return view('servicios.coaching-ontologico', compact('service'));
        }

        return view('servicios.detalle', compact('service'));
    }

    public function coaching()
    {
        return $this->show('coaching-ontologico');
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
