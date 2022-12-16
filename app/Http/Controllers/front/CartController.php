<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        //
    }

    public function delete(Cart $cart) {
        $cart->delete();
        return redirect()->back();
    }
}
