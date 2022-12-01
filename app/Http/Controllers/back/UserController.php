<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('back.users.index', compact('users'));
    }

    public function ChangeRole(User $user) {

        if($user->role == 0) {
            $user->role = 1;
        } else {
            $user->role = 0;
        }

        $user->save();
        return redirect()->back();
    }
}
