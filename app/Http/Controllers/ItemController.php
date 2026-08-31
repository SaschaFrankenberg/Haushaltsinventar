<?php

namespace App\Http\Controllers;

use App\Models\Item;
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
}
