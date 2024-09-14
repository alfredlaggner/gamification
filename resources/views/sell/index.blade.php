<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sellable Collectibles') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-green-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-green-100 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-green-800">My Collectibles</h1>
                <ul class="space-y-4">
                    @foreach($collectibles as $collectible)
                        <li class="p-4 bg-white rounded-lg shadow">
                            <h2 class="text-xl font-semibold">{{ $collectible->name }} - ${{ $collectible->price }}</h2>
                            <p class="text-sm text-gray-500">Rarity: {{ $collectible->rarity->name ?? 'N/A' }}</p>
                            <p class="text-sm text-gray-500">Percentage: {{ $collectible->rarity->percent_of_total_inventory ?? 'N/A' }}%</p>
                            <p class="text-sm text-gray-500">NFTs Included: {{ $collectible->rarity->nfts_included ?? 'N/A' }}</p>
                            <p class="text-sm text-gray-500">Loyalty Points: {{ $collectible->rarity->loyalty_points_earned ?? 'N/A' }}</p>

                            <div class="mt-2">
                                <a href="#" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700">
                                    Sell Collectible
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700">
                Back to Dashboard
            </a>
        </div>
    </div>
</x-layouts.app>
