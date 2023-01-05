<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function search(Request $request) {
        $search = $request->input('search');

        $products = Product::query()
        ->where('title', 'LIKE', "%{$search}%")
        // ->orWhere('body', 'LIKE', "%{$search}%")
        ->get();

        return view('front.product.search', compact('products'));
    }
    
    public function ShowByCategory($cat) {
        $title = $cat;

        $category = Category::where('slug','LIKE','%'.$cat.'%')->first();
        if($category){
            $products = $category->products;
            // Product::where('category_id',$category->id)->get();
        }else{
            abort(404);
        }

        $categories = Category::all();
        return view('front.product.index',compact('title' ,'products', 'categories'));
    }

    public function show(Product $product) { 
        $comments = $product->comments->where('status' , 1)->all();
        $comment_count = count($comments);
        return view('front.product.single', compact('product', 'comments', 'comment_count'));
    }

    public function AddToCart(Product $product) {
        Cart::create([
            'price' => $product->price,
            'user_id' => auth()->user()->id,
            'product_id' => $product->id
        ]);

        return redirect()->back();
    }

    // public function filter() {
    //     $cat
    // }
    
}
