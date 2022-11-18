<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionRequest;
use App\Models\Option;
use Database\Seeders\OptionSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $option = Option::first();

        if ($option) {
            return view('back.options.index', compact('option'));
        } else {
            Artisan::call('db:seed', ['--class' => OptionSeeder::class]);
            $option = Option::first();
            return view('back.options.index', compact('option'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $option = Option::first();
        return view('back.options.edit', compact('option'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function UpdateOrStore(OptionRequest $request)
    {

        $file = $request->file('logo');
        if ($request->hasFile('logo')) {
            $LogoUrl = $this->uploadImage($file);
        } else {
            $LogoUrl = $request->logo;
        }

        $file = $request->file('icon');
        if ($request->hasFile('icon')) {
            $IconUrl = $this->uploadImage($file);
        } else {
            $IconUrl = $request->icon;
        }

        $option = Option::UpdateOrCreate(['id' => [1,2]], [
            'title' => $request->title,
            'logo' => $LogoUrl,
            'icon' => $IconUrl,
            'footer_title' => $request->footer_title,
            'footer_description' => $request->footer_description,
            'footer_copyright' => $request->footer_copyright
        ]);

        return redirect()->route('admin.options.index');
    }

    public function show() {
        $option = Option::first();
        return view('back.options.show', compact('option'));
    }

    public function uploadImage($file)
    {
        $sourcePath = "/upload/options";
        $filename = $file->getClientOriginalName();
        $file = $file->move('../public_html' . $sourcePath, $filename);
        return $filename;
    }
}
