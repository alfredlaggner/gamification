<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leaderboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-yellow-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-yellow-100 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-yellow-800">Top Collectors</h1>
                <ul class="space-y-4">
                    @foreach($customers as $collector)
                        <li class="p-4 bg-white rounded-lg shadow">
                            <h2 class="text-xl font-semibold">{{ $collector->name ?? 'Anonymous' }}</h2>
                            <p class="text-sm text-gray-500">Base Points: {{ $collector->total_base_points }}</p>
                            <p class="text-sm text-gray-500">Redeemable Points: {{ $collector->total_redeemable_points }}</p>
                            <p class="text-sm text-gray-500">Tier: {{ $collector->loyalty_tier ?? 'N/A' }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-700">
                Back to Dashboard
            </a>
        </div>
    </div>
</x-layouts.app>
