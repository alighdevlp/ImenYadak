<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class PaymentController extends Controller
{
    public function pay() {
        $carts = auth()->user()->carts;

        foreach ($carts as $cart) {
            Order::create([
                'price' => $cart->price,
                'code' => 'DDC-'.rand(10000000, 90000000),
                'user_id' => $cart->user_id,
                'product_id' => $cart->product_id,
                'status' => 1,
            ]);
        }

        return redirect()->route('checkout');
    }

    public function checkout() {
        $order = Order::where('user_id', auth()->user()->id)->get();
        dd($order);
        $order_price = $order->sum('price');

        return view('front.payment.checkout',compact('order', 'order_price'));
    }
}
