@switch($user->role)
@case(0)
    <td><button class="btn btn-warning" wire:click='ChangeRole({{ $user->id }})'>کاربر</button></td>
@break

@case(1)
    <td><button class="btn btn-success" wire:click='ChangeRole({{ $user->id }})'>ادمین</button></td>
@break
@endswitch