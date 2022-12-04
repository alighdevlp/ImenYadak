<div class="starts">
    @switch($product->popular)
    @case(1)
        <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(1)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(2)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(3)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(4)'></span>
        <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(5)'></span>
    @break

    @case(2)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(2)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(3)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(4)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(5)'></span>
    @break

    @case(3)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(2)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(3)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(4)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(5)'></span>
    @break

    @case(4)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(2)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(3)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(4)'></span>
    <span class="fa fa-star text-muted" style="cursor: pointer;" wire:click='ChangePopular(5)'></span>
    @break

    @case(5)
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(1)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(2)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(3)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(4)'></span>
    <span class="fa fa-star checked" style="cursor: pointer;" wire:click='ChangePopular(5)'></span>
    @break
@endswitch
</div>