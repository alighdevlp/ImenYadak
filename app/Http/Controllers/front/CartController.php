<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $attributes = Attribute::all();
        return view('front.cart', compact('attributes'));
    }

    public function destroy(Cart $cart) {
        $cart->delete();
        return redirect()->back();
    }
}
