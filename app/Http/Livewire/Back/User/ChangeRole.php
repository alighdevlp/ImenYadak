<?php

namespace App\Http\Livewire\Back\User;

use Livewire\Component;

class ChangeRole extends Component
{

    public $user;

    public function ChangeRole() {
        if($this->user->role == 0) {
            $this->user->role = 1;
        } else {
            $this->user->role = 0;
        }

        $this->user->save();
    }

    public function render()
    {
        return view('livewire.back.user.change-role');
    }
}
