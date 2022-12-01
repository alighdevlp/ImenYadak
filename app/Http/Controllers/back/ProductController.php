<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\back\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(9);

        return view('back.products.index', compact('products'));
    }

    public function search() {
        $products    = Product::query();

        if($keyword = request('search')) {
            $products->where('title' , 'LIKE' , "%$keyword%")->orWhere('price' , $keyword);
        }

        $products = $products->paginate(9);

        return view('back.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('back.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

       $product = Product::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'image' => $ImageUrl,
            'price' => $request->price,
            'description' => $request->description
        ]);

        $product->categories()->attach($request->categories);

        
        
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('back.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('back.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            File::delete('../public_html/upload/products/' . $product->image);
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

        $product->update([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'image' => $ImageUrl,
            'price' => $request->price,
            'description' => $request->description
        ]);

        $product->categories()->attach($request->categories);

        
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    public function uploadImage($file)
    {
        $sourcePath = "/upload/products";
        $filename = $file->getClientOriginalName();
        $file = $file->move('../public_html' . $sourcePath, $filename);
        return $filename;
    }
}
