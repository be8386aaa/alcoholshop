<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductPage(Request $request)
    {
        $data = $request->input('data');

        $products = Product::all();

        return view('layouts.product', compact('products'));
    }
}
