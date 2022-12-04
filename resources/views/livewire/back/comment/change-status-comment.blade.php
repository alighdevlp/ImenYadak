<div class="card-header">
    @switch($comment->status)
        @case(0)
            <button class="card_title btn btn-danger" wire:click='ChangeStatus()'>نمایش داده نشوده</button>
        @break

        @case(1)
            <button class="card_title btn btn-success" wire:click='ChangeStatus()'>نمایش داده شود</button>
        @break
    @endswitch
</div>
