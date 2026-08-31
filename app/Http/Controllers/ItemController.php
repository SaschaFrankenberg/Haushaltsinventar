<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('category', 'location')->get();

        return view('items.index', [
            'items' => $items,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();

        return view('items.create', [
            'categores' => $categories,
            'locations' => $locations,
        ]);
    }
}
