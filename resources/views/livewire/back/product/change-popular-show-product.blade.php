<div class="starts" wire:poll.5000ms>
    @switch($pop->popular)
    @case(1)
        <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 1)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 2)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 3)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 4)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 5)'></span>
    @break

    @case(2)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 2)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 3)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 4)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 5)'></span>
    @break

    @case(3)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 2)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 3)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 4)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 5)'></span>
    @break

    @case(4)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 2)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 3)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 4)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 5)'></span>
    @break

    @case(5)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 2)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 3)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 4)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular({{ $pop->id }} , 5)'></span>
    @break
@endswitch
</div>