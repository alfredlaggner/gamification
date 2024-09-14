<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collectible;

class AvailableCollectiblesController extends Controller
{
    /**
     * Display a listing of the available collectibles.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all available collectibles (with inventory_quantity greater than 0)
        $collectibles = Collectible::where('inventory_quantity', '>', 0)->get();

        return view('available_collectibles.index', compact('collectibles'));
    }
}
