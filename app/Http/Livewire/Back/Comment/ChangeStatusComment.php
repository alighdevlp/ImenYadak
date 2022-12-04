<?php

namespace App\Http\Livewire\Back\Comment;

use App\Models\Comment;
use Livewire\Component;

class ChangeStatusComment extends Component
{
    public $comment;

    public function ChangeStatus() {
       if($this->comment->status == 0) {
            $this->comment->status = 1;
       } else {
        $this->comment->status = 0;
       }

       $this->comment->save();
    }

    public function render()
    {
        return view('livewire.back.comment.change-status-comment');
    }
}
