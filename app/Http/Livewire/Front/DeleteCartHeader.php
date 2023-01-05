<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class DeleteCartHeader extends Component
{

    public $item;

    public function DeleteCart() {
        $this->item->delete();
    }

    public function render()
    {
        return view('livewire.front.delete-cart-header');
            // ->layout('front.layouts.master');
    }
}
