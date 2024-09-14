<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collectible;

class SellCollectibleController extends Controller
{
    public function index()
    {
        // Get the logged-in user's customer
        $customer = auth()->user()->customer;

        // If the customer exists, fetch their collectibles
        if ($customer) {
            $collectibles = Collectible::where('customer_id', $customer->id)->get();
        } else {
            $collectibles = collect(); // Empty collection if customer is not found
        }

        return view('sell.index', compact('collectibles'));
    }

    public function create()
    {
        // Get the logged-in user's customer
        $customer = auth()->user()->customer;

        // If the customer exists, fetch their collectibles
        if ($customer) {
            $collectibles = Collectible::where('customer_id', $customer->id)->get();
        } else {
            $collectibles = collect(); // Empty collection if customer is not found
        }

        return view('sell.create', compact('collectibles'));
    }

    public function store(Request $request)
    {
        // Logic for listing a collectible for sale (could be expanded based on form data)
        return redirect()->route('dashboard')->with('success', 'Collectible listed for sale successfully!');
    }
}
