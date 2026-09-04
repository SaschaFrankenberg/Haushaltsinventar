<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Item;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Holt die Items aus beiden Tabellen und übergibt sie an die View
    public function index()
    {
        $items = Item::with('category', 'location')->get();

        return view('items.index', [
            'items' => $items,
        ]);
    }

    // zeigt das Formular im Browser an und übergibt die Daten in die Select-Felder
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();

        return view('items.create', [
            'categories' => $categories,
            'locations' => $locations,
        ]);
    }

    // Validierung der Eingaben und Meldung für den Erfolg
    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());

        return redirect()
            ->route('items.index')
            ->with('status', 'Item erfolgreich angelegt');
    }

    public function show(Item $item)
    {
        return view('items.show', [
            'item' => $item,
        ]);
    }
}
