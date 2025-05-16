@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-secondary bg-opacity-30 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white rounded-lg shadow-xl p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-primary mb-2">
                    Verifica tu correo electrónico
                </h2>
                <p class="text-gray-600">
                    Antes de continuar, por favor verifica tu correo electrónico haciendo clic en el enlace que te hemos
                    enviado
                </p>
            </div>

            @if (session('resent'))
                <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                    Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
                </div>
            @endif

            <div class="text-gray-700 mb-6">
                Si no has recibido el correo electrónico de verificación, puedes solicitar otro haciendo clic en el botón de
                abajo.
            </div>

            <form method="POST" action="{{ route('verification.resend') }}" class="space-y-6">
                @csrf
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-secondary hover:text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                    Reenviar correo de verificación
                </button>
            </form>

            <div class="text-center mt-6">
                <a href="{{ url('/') }}" class="text-sm text-primary hover:text-secondary">
                    Volver al inicio
                </a>
            </div>
        </div>
    </div>
@endsection
