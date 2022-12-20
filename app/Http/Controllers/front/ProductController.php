<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowByCategory($cat) {
        $category = Category::where('slug','LIKE','%'.$cat.'%')->first();
        if($category){
            $products = Product::where('category_id',$category->id)->get();
        }else{
            abort(404);
        }
        return view('front.product.index',compact('products'));
    }

    public function show() { 
        return view('front.product.single');
    }
}
