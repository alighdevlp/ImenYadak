<?php

namespace App\Http\Livewire\Back\Product;

use App\Models\Product;
use Livewire\Component;

class ChangeSuggest extends Component
{

    public $prod;

    public function Change($prod) {
        $product = Product::find($prod);
        if($product->suggest == 0) {
            $product->suggest = 1;
        } else {
            $product->suggest = 0;
        }

        $product->save();
    }

    public function render()
    {
        return view('livewire.back.product.change-suggest');
    }
}
