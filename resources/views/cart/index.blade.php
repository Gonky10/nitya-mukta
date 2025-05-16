@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-primary mb-8">Mi Carrito</h1>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if (count($cart) > 0)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Servicio
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Cantidad
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Subtotal
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php $total = 0; @endphp
                        @foreach ($cart as $serviceId => $item)
                            @php
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $item['name'] }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    ${{ number_format($item['price'], 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $item['quantity'] }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    ${{ number_format($subtotal, 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <form action="{{ route('cart.remove', $serviceId) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="bg-gray-50">
                            <td colspan="3" class="px-6 py-4 text-right text-sm font-medium text-gray-900">
                                Total:
                            </td>
                            <td colspan="2" class="px-6 py-4 text-left text-sm font-bold text-primary">
                                ${{ number_format($total, 2, ',', '.') }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="mt-8 flex justify-between items-center">
                <a href="{{ route('servicios.index') }}"
                    class="inline-flex items-center px-4 py-2 border border-primary text-sm font-medium rounded-md text-primary hover:bg-primary hover:text-white transition duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Seguir Comprando
                </a>
                <a href="#"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-secondary hover:text-primary transition duration-300">
                    Proceder al Pago
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        @else
            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4">
                <p class="text-lg">Tu carrito está vacío.</p>
                <a href="{{ route('servicios.index') }}" class="text-primary hover:text-secondary font-medium">
                    Ver servicios disponibles <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        @endif
    </div>
@endsection
