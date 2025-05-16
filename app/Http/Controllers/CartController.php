<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $serviceId = $request->service_id;
        $cart = Session::get('cart', []);

        if (isset($cart[$serviceId])) {
            $cart[$serviceId]['quantity']++;
        } else {
            $cart[$serviceId] = [
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => 1,
            ];
        }

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Servicio agregado al carrito exitosamente');
    }

    public function removeFromCart($serviceId)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$serviceId])) {
            unset($cart[$serviceId]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Servicio eliminado del carrito');
    }
}
