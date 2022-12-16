@switch($order->status)
@case(0)
    <td class="text-center"><button class="btn btn-danger" wire:click='ChangeStatus({{ $order->id }})'>تکمیل نشده</button></td>
@break

@case(1)
    <td class="text-center"><button class="btn btn-success" wire:click='ChangeStatus({{ $order->id }})'>تکمیل شده</button></td>
@break
@endswitch