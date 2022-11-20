<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('back.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

        Brand::create([
            'image' => $ImageUrl,
        ]);

        return redirect()->route('admin.brands.index');
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
    public function edit(Brand $brand)
    {
        return view('back.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

        $brand->update([
            'image' => $ImageUrl,
        ]);

        return redirect()->route('admin.brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        File::delete('../public_html/upload/brands/' . $brand->image);
        return redirect()->back();
    }

    public function uploadImage($file)
    {
        $sourcePath = "/upload/brands";
        $filename = $file->getClientOriginalName();
        $file = $file->move('../public_html' . $sourcePath, $filename);
        return $filename;
    }
}
