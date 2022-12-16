<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::paginate(10);

        return view('back.orders.index', compact('orders'));
    }
}
