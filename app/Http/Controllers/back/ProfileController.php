<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('back.profile.index');
    }

    public function edit()
    {
        return view('back.profile.edit');
    }
}
