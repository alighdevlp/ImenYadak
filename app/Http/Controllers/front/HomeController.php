<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sliders = Slider::orderBy('order')->get();
        $banners_top = Banner::where('position', 0)->take(2)->get();
        $banners_center = Banner::where('position', 1)->take(2)->get();
        $banners_bottom = Banner::where('position', 2)->take(4)->get();
        $brands = Brand::all();
        // $products_suggest = Product::where('suggest' , 1)->take(6)->get();
        $products_popular = Product::where('popular' , 5)->take(6)->get();
        $products_new = Product::orderBy('id' , 'DESC')->get();
        // $products_suggest = Product::where('suggest' , 1)->take(6)->get();
        // $products_suggest = Product::where('suggest' , 1)->take(6)->get();
        return view('front.index', compact('sliders', 'banners_top', 'banners_center', 'banners_bottom', 'brands', 'products_popular', 'products_new'));
    }
}
