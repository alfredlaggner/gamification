<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collectible;
use App\Models\Order;

class OrderCollectibleController extends Controller
{
    public function index()
    {
        // Fetch all orders
        $orders = Order::with('collectibles')->get();
        return view('order.index', compact('orders'));
    }

    public function create()
    {
        // Get all collectibles available for purchase
        $collectibles = Collectible::all();
        return view('order.create', compact('collectibles'));
    }

    public function store(Request $request)
    {
        // Logic to store an order in the database
        // Typically, you'd handle form submission and store the order here
        $order = new Order();
        $order->total_amount = $request->total_amount;
        $order->status = 'Pending';  // Assuming a default status of 'Pending'
        $order->save();

        // Attach selected collectibles to the order
        $collectibleIds = $request->collectibles; // Collectible IDs selected by the user
        $order->collectibles()->attach($collectibleIds);

        return redirect()->route('order.index')->with('success', 'Order placed successfully!');
    }
}
