<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\AccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index() {
        return view('front.account.index');
    }

    public function OrderList() {
        return view('front.account.orders');
    }

    public function edit() {
        return view('front.account.edit');
    }

    public function update(AccountRequest $request) {
        $user = Auth::user();
        $password = Hash::make($request);

        if($request->password) {
            $user->name = $request->name;
            $user->family = $request->family;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = $password;
        } else {
            $user->name = $request->name;
            $user->family = $request->family;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->email = $request->email;
        }

        $user->save();
        return redirect()->route('account.index');

    }
}
