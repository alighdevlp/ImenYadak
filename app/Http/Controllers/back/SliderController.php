<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('back.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

        Slider::create([
            'image' => $ImageUrl,
            'status' => $request->status,
            'priority' => $request->priority
        ]);

        return redirect()->route('admin.sliders.index');
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
    public function edit(Slider $slider)
    {
        return view('back.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $ImageUrl = $this->uploadImage($file);
        } else {
            $ImageUrl = $request->image;
        }

        $slider->update([
            'image' => $ImageUrl,
            'status' => $request->status,
            'priority' => $request->priority
        ]);

        return redirect()->route('admin.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        File::delete('../public_html/upload/sliders/'.$slider->image);
        return redirect()->back();
    }

    public function uploadImage($file)
    {
        $sourcePath = "/upload/sliders";
        $filename = $file->getClientOriginalName();
        $file = $file->move('../public_html' . $sourcePath, $filename);
        return $filename;
    }
}
