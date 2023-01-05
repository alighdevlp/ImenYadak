<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Attribute as ModelsAttribute;
use App\Models\Comment;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Option;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{

    public function __construct()
    {   
        $this->middleware('sitestatus');
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
