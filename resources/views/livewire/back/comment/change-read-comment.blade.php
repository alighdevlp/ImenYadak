<div class="main-mail-checkbox">
    <label class="ckbox"><input type="checkbox" {{ $comment->read ? 'checked' : '' }} wire:click='ChangeRead()'> <span></span></label>
</div>