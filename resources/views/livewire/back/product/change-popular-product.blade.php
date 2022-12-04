<div>
    @switch($product->popular)
    @case(1)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular(1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(2)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(3)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(4)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(2)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular(1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(3)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(4)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(3)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular(1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(3)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(4)"><i class="ion ion-md-star-outline text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(4)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular(1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(3)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(4)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(5)"><i class="ion ion-md-star-outline text-warning"></i></button>
    </span>
    @break

    @case(5)
    <span class="tx-15 ml-auto">
        <button class="border-0" wire:click="ChangePopular(1)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(2)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(3)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(4)"><i class="ion ion-md-star text-warning"></i></button>
        <button class="border-0" wire:click="ChangePopular(5)"><i class="ion ion-md-star text-warning"></i></button>
    </span>
    @break
@endswitch
</div>