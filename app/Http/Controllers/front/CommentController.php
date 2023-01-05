<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\CommentRequest;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentRequest $request, Product $product) {
        Comment::create(array_merge($request->all(),['profile' => auth()->user()->profile ,'product_id' => $product->id]));
        return redirect()->back();
    }
}
