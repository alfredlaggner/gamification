<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Collectible;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Get the logged-in user
        $customer = $user->customer; // Get the customer's info through the relationship

        if ($customer) {
            // Sum loyalty points for collectibles owned by the current customer
            $collectiblesPointsSum = Collectible::where('customer_id', $customer->id)
                ->join('rarities', 'collectibles.rarity_id', '=', 'rarities.id')
                ->sum('rarities.loyalty_points_earned');
    
            // Update customer points dynamically
            if ($collectiblesPointsSum > $customer->total_base_points) {
                $customer->total_base_points = $collectiblesPointsSum;
            }
    
            // Overwrite total redeemable points
            $customer->total_redeemable_points = $collectiblesPointsSum;
            $customer->save();

            // Set values for the view
            $total_base_points = $customer->total_base_points;
            $total_redeemable_points = $customer->total_redeemable_points;
        } else {
            // Handle case when no customer is found
            $collectiblesPointsSum = 0;
            $total_base_points = 0;
            $total_redeemable_points = 0;
        }
    
        // Get the count of available collectibles (inventory_quantity > 0)
        $availableCollectiblesCount = Collectible::where('inventory_quantity', '>', 0)->count();

        return view('dashboard', compact('availableCollectiblesCount', 'total_base_points', 'total_redeemable_points'));
    }
}
