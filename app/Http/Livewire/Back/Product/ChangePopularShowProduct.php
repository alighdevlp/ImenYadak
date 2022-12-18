<?php

namespace App\Http\Livewire\Back\Product;

use App\Models\Product;
use Livewire\Component;

class ChangePopularShowProduct extends Component
{
    public $product;

    public function ChangePopular($num) {
        $this->product->popular = $num;
        $this->product->save();
    }

    public function render()
    {
        return view('livewire.back.product.change-popular-show-product');
    }
}
