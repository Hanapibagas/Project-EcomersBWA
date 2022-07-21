<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.index');
    }

    public function details(Request $request, $slug)
    {
        return view('frontend.details');
    }

    public function cart(Request $request)
    {
        return view('frontend.cart');
    }

    public function success(Request $request)
    {
        return view('frontend.success');
    }
}
