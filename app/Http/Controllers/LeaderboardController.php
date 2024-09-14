<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index()
    {
        $customers = Customer::orderByDesc('total_base_points')->take(10)->get(); // Top 10 customers by Base Points
        return view('leaderboard', compact('customers'));
    }
}


