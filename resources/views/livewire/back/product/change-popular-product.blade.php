<div wire:poll.5000ms>
    @switch($pop->popular)
    @case(1)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 2)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 3)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 4)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(2)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 3)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 4)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(3)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 3)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 4)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(4)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 3)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 4)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(5)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 3)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 4)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular({{ $pop->id }} , 5)"><i class="ion ion-md-star text-warning"></i></button>
    </span>
    @break
@endswitch
</div>