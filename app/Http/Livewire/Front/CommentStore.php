<?php

namespace App\Http\Livewire\Front;

use App\Models\Comment;
use Livewire\Component;

class CommentStore extends Component
{

    public $product;
    public $message;


    public function CommentStore() {
        Comment::create([
            'name' => auth()->user()->name,
            'profile' => auth()->user()->profile,
            'email' => auth()->user()->email,
            'message' => $this->message,
            'product_id' => $this->product->id,
        ]);
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.front.comment-store')
            ->layout('front.layouts.master');
    }
}
