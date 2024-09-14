<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-100 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-blue-800">Available Collectibles</h3>
                        <p>View and manage all available collectibles.</p>
                        <a href="{{ route('available.collectibles') }}"
                           class="mt-3 inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                            View Collectibles
                        </a>
                    </div>


                    <!-- Sales Section -->
                    <div class="bg-green-100 rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-green-800">Points Overview</h3>
                        <p>Total Base Points: {{ $total_base_points }}</p>
                        <p>Total Redeemable Points: {{ $total_redeemable_points }}</p>
                        <h3 class="text-lg font-semibold text-green-800">My Collectibles</h3>
                        <p>List my collection.</p>
                        <a href="{{ route('sell.index') }}"
                           class="mt-3 inline-block px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-md">
                            View my collection
                        </a>
                    </div>

                     <!-- Leaderboard Section -->
                     <div class="bg-yellow-100 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-yellow-800">Leaderboard</h3>
                        <p>See who’s on top in collecting Nuggies!</p>
                        <a href="{{ route('leaderboard.index') }}"
                           class="mt-3 inline-block px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-md">
                            View Leaderboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
