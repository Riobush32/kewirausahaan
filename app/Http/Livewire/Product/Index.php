<?php

namespace App\Http\Livewire\Product;

use App\Product;
use Livewire\Component;
use Livewire\WithPaginations;

class Index extends Component
{

    use WithPaginations;

    public function render()
    {
        

        return view('livewire.product.index', [
            'products' => Product::lastest()->paginate(10);
        ]);
    }
}
