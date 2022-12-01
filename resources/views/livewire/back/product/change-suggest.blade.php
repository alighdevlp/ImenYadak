<div class="d-flex product-sale" wire:poll.5000ms>
    @switch($prod->suggest)
        @case(0)
        <i class="mdi mdi-lightbulb-outline ml-auto wishlist" style="cursor: pointer;"
        @break

        @case(1)
        <i class="mdi mdi-lightbulb text-warning ml-auto wishlist" style="cursor: pointer;"
        @break
    @endswitch
        wire:click="Change({{ $prod->id }})"></i>
</div>
