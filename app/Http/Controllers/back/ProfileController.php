<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\back\ProfileRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $products_count = Product::count();
        return view('back.profile.index', compact('products_count'));
    }

    public function edit()
    {
        return view('back.profile.edit');
    }

    public function update(ProfileRequest $request) {
        $user = auth()->user();

        if($request->password) {
            $password = Hash::make($request->password);

               $user->name = $request->name;
               $user->phone = $request->phone;
               $user->address = $request->address;
               $user->email = $request->email;
               $user->password = $password;
        } else {
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->email = $request->email;
        }

        $user->save();  
        return redirect()->route('admin.profile.index');
    }
}
