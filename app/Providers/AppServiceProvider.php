<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\Menu;
use App\Models\Setting;
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

        $count_unread_comments = Comment::where('read', 0)->count();
        view()->share('count_unread_comments', $count_unread_comments);

        $un_comments = Comment::where('read', 0)->get();
        view()->share('un_comments', $un_comments);

        
        $menu_categories = Menu::where('menu_mode', 1)->get();
        view()->share('menu_categories', $menu_categories);


        $menus = Menu::where('menu_mode', 0)->get();
        view()->share('menus', $menus);

    }
}
