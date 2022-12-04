<div class="d-flex product-sale">
    @switch($product->suggest)
        @case(0)
        <i class="mdi mdi-lightbulb-outline ml-auto wishlist" style="cursor: pointer;" wire:click="Change()"></i>
        @break

        @case(1)
        <i class="mdi mdi-lightbulb text-warning ml-auto wishlist" style="cursor: pointer;" wire:click="Change()"></i>
        @break
    @endswitch
</div>
