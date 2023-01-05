<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Attribute as ModelsAttribute;
use App\Models\Comment;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Option;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function () {
            return base_path('public_html');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $option = Option::first();
        view()->share('option', $option);

        $count_unread_comments = Comment::where('read', 0)->count();
        view()->share('count_unread_comments', $count_unread_comments);

        $un_comments = Comment::where('read', 0)->get();
        view()->share('un_comments', $un_comments);

        
        $menu_categories = MenuCategory::all();
        view()->share('menu_categories', $menu_categories);


        $menus = Menu::orderby('menu_order', 'ASC')->get();
        view()->share('menus', $menus);


        $attributes = ModelsAttribute::all();
        view()->share('attributes', $attributes);

        $products_suggest = Product::where('suggest' , 1)->take(6)->get();
        view()->share('products_suggest', $products_suggest);

        view()->composer('*', function ($view) 
        {
            if(auth()->check()) {
                $carts_count = Cart::where('user_id', auth()->user()->id)->count();
                $view->with('carts_count', $carts_count );
    
                $carts_price = Cart::where('user_id', auth()->user()->id)->sum('price');
                $view->with('carts_price', $carts_price);
            } else {
                $carts_count = 0;
                $view->with('carts_count', $carts_count );
            }
        });
    }
}
