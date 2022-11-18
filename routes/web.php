<?php

use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\MenuCategoryController;
use App\Http\Controllers\back\MenuController;
use App\Http\Controllers\back\MenuItemController;
use App\Http\Controllers\back\OptionController;
use App\Http\Controllers\back\ProfileController;
use App\Http\Controllers\back\SettingController;
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



Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('home');
});