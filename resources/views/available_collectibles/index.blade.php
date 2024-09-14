<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Available Collectibles') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-blue-100 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-blue-800">Collectibles for Purchase</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse ($collectibles as $collectible)
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <!-- Resize image to half size -->
                            <img src="{{ $collectible->image_src }}" class="w-full h-24 object-cover rounded-t-lg" alt="{{ $collectible->name }}">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold">{{ $collectible->name }}</h5>
                                <p class="text-gray-700">{{ $collectible->description }}</p>
                                <p class="text-gray-800">Price: ${{ number_format($collectible->price, 2) }}</p>
                                <p class="text-gray-800">Available: {{ $collectible->inventory_quantity }}</p>
                                <a href="#" class="mt-3 inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No collectibles available at the moment.</p>
                    @endforelse
                </div>
                <div class="text-center mt-6">
                    <h3>Total Collectibles: {{ $collectibles->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                Back to Dashboard
            </a>
        </div>
    </div>
</x-layouts.app>
