<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        return view('home',[
            'data' => $product
        ]);
    }

    public function second()
    {
        $product = Product::all();
        return view('welcome',[
            'data' => $product
        ]);
    }
}
