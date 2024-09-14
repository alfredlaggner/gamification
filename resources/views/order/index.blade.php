<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Collectibles') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-blue-100 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-blue-800">Your Orders</h1>
                <ul class="space-y-4">
                    @foreach($collectibles as $order)
                        <li class="p-4 bg-white rounded-lg shadow">
                            <h2 class="text-xl font-semibold">Order #{{ $order->id }}</h2>
                            <p class="text-sm text-gray-500">Date: {{ $order->created_at->format('F j, Y') }}</p>
                            <p class="text-sm text-gray-500">Total Amount: ${{ $order->total_amount }}</p>
                            <p class="text-sm text-gray-500">Status: {{ $order->status }}</p>

                            <div class="mt-2">
                                <a href="{{ route('order.index', $order->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    View Details
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                Back to Dashboard
            </a>
        </div>
    </div>
</x-layouts.app>
