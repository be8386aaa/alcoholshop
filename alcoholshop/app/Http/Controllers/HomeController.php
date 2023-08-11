<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact()
    {
        return view('layouts.contact');
    }

    public function blog_single()
    {
        return view('layouts.blog_single');
    }

    public function blog()
    {
        return view('layouts.blog');
    }

    public function cart()
    {
        return view('layouts.cart');
    }

    public function checkout()
    {
        return view('layouts.checkout');
    }

    public function login()
    {
        return view('layouts.login');
    }

    public function product_detail()
    {
        return view('layouts.product_detail');
    }

    public function product()
    {
        return view('layouts.product');
    }

    public function home()
    {
        return view('layouts.home');
    }
}
