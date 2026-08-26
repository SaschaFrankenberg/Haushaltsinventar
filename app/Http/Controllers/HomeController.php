<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function items()
    {
        return view('items');
    }

    public function about()
    {
        return view('about');
    }
}
