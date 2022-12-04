<?php

namespace App\Http\Livewire\Back\Comment;

use Livewire\Component;

class ChangeReadComment extends Component
{
    public $comment;

    public function ChangeRead() {
        if($this->comment->read == 0) {
            $this->comment->read = 1;
        } else {
            $this->comment->read = 0;
        }

        $this->comment->save();
    }

    public function render()
    {
        return view('livewire.back.comment.change-read-comment');
    }
}
