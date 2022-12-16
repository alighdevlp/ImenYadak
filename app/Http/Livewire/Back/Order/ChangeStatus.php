<?php

namespace App\Http\Livewire\Back\Order;

use Livewire\Component;

class ChangeStatus extends Component
{

    public $order;

    public function ChangeStatus() {
        if($this->order->status == 0) {
            $this->order->status = 1;
        } else {
            $this->order->status = 0; 
        }

        $this->order->save();
    }

    public function render()
    {
        return view('livewire.back.order.change-status');
    }
}
