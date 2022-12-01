<?php

namespace App\Http\Livewire\Back\Product;

use App\Models\Product;
use Livewire\Component;

class ChangePopularShowProduct extends Component
{
    public $pop;

    public function ChangePopular($id, $num) {
        $product = Product::find($id);
        $product->popular = $num;
        $product->save();
    }

    public function render()
    {
        return view('livewire.back.product.change-popular-show-product');
    }
}
