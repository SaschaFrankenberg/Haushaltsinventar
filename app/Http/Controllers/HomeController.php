<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {   
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
