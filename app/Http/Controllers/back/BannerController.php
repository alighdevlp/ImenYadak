<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('back.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

        Banner::create([
            'image' => $ImageUrl,
            'status' => $request->status,
            'priority' => $request->priority,
            'position' => $request->position
        ]);

        return redirect()->route('admin.banners.index');
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
    public function edit(Banner $banner)
    {
        return view('back.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, Banner $banner)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

        $banner->update([
            'image' => $ImageUrl,
            'status' => $request->status,
            'priority' => $request->priority,
            'position' => $request->position
        ]);

        return redirect()->route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        File::delete('../public_html/upload/banners/'.$banner->image);
        return redirect()->back();
    }

    public function uploadImage($file)
    {
        $sourcePath = "/upload/banners";
        $filename = $file->getClientOriginalName();
        $file = $file->move('../public_html' . $sourcePath, $filename);
        return $filename;
    }
}