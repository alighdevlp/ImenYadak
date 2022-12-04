<?php

namespace App\Http\Livewire\Back\Comment;

use App\Models\Comment;
use Livewire\Component;

class ChangeAllReadComment extends Component
{

    public function ChangeAllRead() {
       $comments = Comment::all();

        foreach ($comments as $comment) {
            $comment->read = 1;
            $comment->save();
        }

    }

    public function render()
    {
        return view('livewire.back.comment.change-all-read-comment');
    }
}
