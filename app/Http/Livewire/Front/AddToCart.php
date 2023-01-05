<?php

namespace App\Http\Livewire\Front;

use App\Models\Cart;
use Livewire\Component;

class AddToCart extends Component
{

    public $product;

    public function AddToCart() {
        Cart::create([
            'price' => $this->product->price,
            'user_id' => auth()->user()->id,
            'product_id' => $this->product->id
        ]);
    }

    public function render()
    {
        return view('livewire.front.add-to-cart')
            ->layout('front.layouts.master');
            
    }
}
