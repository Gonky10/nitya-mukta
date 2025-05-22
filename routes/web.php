<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', [ServiceController::class, 'index'])->name('servicios.index');
Route::get('/servicios/coaching', [ServiceController::class, 'coaching'])->name('servicios.coaching');
Route::get('/servicios/reiki', [ServiceController::class, 'reiki'])->name('servicios.reiki');
Route::get('/servicios/rito-utero', [ServiceController::class, 'ritoUtero'])->name('servicios.rito-utero');
Route::get('/servicios/tarjeta-cuantica', [ServiceController::class, 'tarjetaCuantica'])->name('servicios.tarjeta-cuantica');
Route::get('/servicios/aromaterapia', [ServiceController::class, 'aromaterapia'])->name('servicios.aromaterapia');
Route::get('/servicios/mujer-sagrada', [ServiceController::class, 'mujerSagrada'])->name('servicios.mujer-sagrada');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'enviarMensaje'])->name('contacto.enviar');

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Rutas del carrito
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/{serviceId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

    // Rutas del perfil
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Redirigir usuarios no autenticados al login cuando intenten acceder a servicios
Route::get('/services/{service}', function () {
    if (!auth()->check()) {
        return redirect()->route('login')->with('message', 'Por favor inicia sesión para ver los servicios');
    }
    // Lógica para mostrar el servicio
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
