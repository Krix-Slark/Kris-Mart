<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest 8 products (or whatever number you want)
        $products = Product::latest()->take(8)->get();

        return view('home.index', compact('products'));
    }
}
