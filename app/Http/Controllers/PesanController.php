<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PesanController extends Controller
{
    //

    public function index($id)
    {
        $product = Product::where('id', $id)->first();

        return view('pesan.index', [
            'data' => $product
        ]);
    }

    public function pesan(Request $request, $id)
    {
        
    }
}
