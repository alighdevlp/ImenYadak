<?php

namespace App\Http\Livewire\Back\Product;

use App\Models\Product;
use Livewire\Component;

class ChangeSuggest extends Component
{

    public $product;

    public function Change() {
        if($this->product->suggest == 0) {
            $this->product->suggest = 1;
        } else {
            $this->product->suggest = 0;
        }

        $this->product->save();
    }

    public function render()
    {
        return view('livewire.back.product.change-suggest');
    }
}
