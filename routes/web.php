<?php

use App\Http\Controllers\back\BannerController;
use App\Http\Controllers\back\BrandController;
use App\Http\Controllers\back\CategoryController;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\MenuCategoryController;
use App\Http\Controllers\back\MenuController;
use App\Http\Controllers\back\MenuItemController;
use App\Http\Controllers\back\OptionController;
use App\Http\Controllers\back\ProductController;
use App\Http\Controllers\back\ProfileController;
use App\Http\Controllers\back\SettingController;
use App\Http\Controllers\back\SliderController;
use App\Http\Controllers\back\SubmenuController;
use App\Http\Controllers\back\UserController;
use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('checkrole')->name('admin.dashboard.index');


Route::prefix('/admin/users')->middleware('checkrole')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('admin.users.index');
});

Route::prefix('/admin/profile')->middleware('checkrole')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
});

Route::prefix('/admin/options')->middleware('checkrole')->group(function () {
    Route::get('/index', [OptionController::class, 'index'])->name('admin.options.index');
    Route::get('/edit', [OptionController::class, 'edit'])->name('admin.options.edit');
    Route::post('/UpdateOrStore', [OptionController::class, 'UpdateOrStore'])->name('admin.options.UpdateOrStore');
    Route::get('/show', [OptionController::class, 'show'])->name('admin.options.show');
});

Route::prefix('/admin/menus')->middleware('checkrole')->group(function () {
    Route::get('/index', [MenuController::class, 'index'])->name('admin.menus.index');
    Route::get('/create', [MenuController::class, 'create'])->name('admin.menus.create');
    Route::post('/store', [MenuController::class, 'store'])->name('admin.menus.store');
    Route::get('/edit/{menu}', [MenuController::class, 'edit'])->name('admin.menus.edit');
    Route::put('/update/{menu}', [MenuController::class, 'update'])->name('admin.menus.update');
    Route::get('/destroy/{menu}', [MenuController::class, 'destroy'])->name('admin.menus.destroy');
});

Route::prefix('/admin/menucategories')->middleware('checkrole')->group(function () {
    Route::get('/index', [MenuCategoryController::class, 'index'])->name('admin.menucategories.index');
    Route::get('/create', [MenuCategoryController::class, 'create'])->name('admin.menucategories.create');
    Route::post('/store', [MenuCategoryController::class, 'store'])->name('admin.menucategories.store');
    Route::get('/edit/{menucategory}', [MenuCategoryController::class, 'edit'])->name('admin.menucategories.edit');
    Route::put('/update/{menucategory}', [MenuCategoryController::class, 'update'])->name('admin.menucategories.update');
    Route::get('/destroy/{menucategory}', [MenuCategoryController::class, 'destroy'])->name('admin.menucategories.destroy');
});

Route::prefix('/admin/menuitems')->middleware('checkrole')->group(function () {
    Route::get('/index', [MenuItemController::class, 'index'])->name('admin.menuitems.index');
    Route::get('/create', [MenuItemController::class, 'create'])->name('admin.menuitems.create');
    Route::post('/store', [MenuItemController::class, 'store'])->name('admin.menuitems.store');
    Route::get('/edit/{menuitem}', [MenuItemController::class, 'edit'])->name('admin.menuitems.edit');
    Route::put('/update/{menuitem}', [MenuItemController::class, 'update'])->name('admin.menuitems.update');
    Route::get('/destroy/{menuitem}', [MenuItemController::class, 'destroy'])->name('admin.menuitems.destroy');
});


Route::prefix('/admin/categories')->middleware('checkrole')->group(function () {
    Route::get('/index', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::get('/destroy/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
});


Route::prefix('/admin/products')->middleware('checkrole')->group(function () {
    Route::get('/index', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::get('/destroy/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});

Route::prefix('/admin/banners')->middleware('checkrole')->group(function () {
    Route::get('/index', [BannerController::class, 'index'])->name('admin.banners.index');
    Route::get('/create', [BannerController::class, 'create'])->name('admin.banners.create');
    Route::post('/store', [BannerController::class, 'store'])->name('admin.banners.store');
    Route::get('/edit/{banner}', [BannerController::class, 'edit'])->name('admin.banners.edit');
    Route::put('/update/{banner}', [BannerController::class, 'update'])->name('admin.banners.update');
    Route::get('/destroy/{banner}', [BannerController::class, 'destroy'])->name('admin.banners.destroy');
});

Route::prefix('/admin/sliders')->middleware('checkrole')->group(function () {
    Route::get('/index', [SliderController::class, 'index'])->name('admin.sliders.index');
    Route::get('/create', [SliderController::class, 'create'])->name('admin.sliders.create');
    Route::post('/store', [SliderController::class, 'store'])->name('admin.sliders.store');
    Route::get('/edit/{slider}', [SliderController::class, 'edit'])->name('admin.sliders.edit');
    Route::put('/update/{slider}', [SliderController::class, 'update'])->name('admin.sliders.update');
    Route::get('/destroy/{slider}', [SliderController::class, 'destroy'])->name('admin.sliders.destroy');
});

Route::prefix('/admin/brands')->middleware('checkrole')->group(function () {
    Route::get('/index', [BrandController::class, 'index'])->name('admin.brands.index');
    Route::get('/create', [BrandController::class, 'create'])->name('admin.brands.create');
    Route::post('/store', [BrandController::class, 'store'])->name('admin.brands.store');
    Route::get('/edit/{brand}', [BrandController::class, 'edit'])->name('admin.brands.edit');
    Route::put('/update/{brand}', [BrandController::class, 'update'])->name('admin.brands.update');
    Route::get('/destroy/{brand}', [BrandController::class, 'destroy'])->name('admin.brands.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('home');
});