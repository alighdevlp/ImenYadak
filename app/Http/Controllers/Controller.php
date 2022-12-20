<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Menu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function __construct()
    {
        $this->middleware('sitestatus');
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
