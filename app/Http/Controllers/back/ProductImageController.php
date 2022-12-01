<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\back\ProductImageRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productimages = ProductImage::paginate(9);
        return view('back.product-images.index', compact('productimages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('back.product-images.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductImageRequest $request)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ProductImageUrl = $this->uploadImage($file);
        } else {
            $ProductImageUrl = $request->image;
        }

        ProductImage::create([
            'image' => $ProductImageUrl,
            'product_id' => $request->product
        ]);

        return redirect()->route('admin.productimages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImage $productImage)
    {
        $products = Product::all();
        return view('back.product-images.edit', compact('productImage', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductImage $productImage)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            File::delete('../public_html/upload/product-images/' . $productImage->image);
            $ProductImageUrl = $this->uploadImage($file);
        } else {
            $ProductImageUrl = $request->image;
        }

        $productImage->update([
            'image' =>$ProductImageUrl,
            'product_id' => $request->product
        ]);

        return redirect()->route('admin.productimages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImage $productImage)
    {
        $productImage->delete();
        File::delete('../public_html/upload/product-images/' . $productImage->image);
        return redirect()->back();
    }

    public function uploadImage($file)
    {
        $sourcePath = "/upload/product-images";
        $filename = $file->getClientOriginalName();
        $file = $file->move('../public_html' . $sourcePath, $filename);
        return $filename;
    }
}
