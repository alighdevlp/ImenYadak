<?php

use App\Http\Controllers\back\AttributeController;
use App\Http\Controllers\back\BannerController;
use App\Http\Controllers\back\BrandController;
use App\Http\Controllers\back\CategoryController;
use App\Http\Controllers\back\CommentController;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\MediaController;
use App\Http\Controllers\back\MenuCategoryController;
use App\Http\Controllers\back\MenuController;
use App\Http\Controllers\back\MenuItemController;
use App\Http\Controllers\back\OptionController;
use App\Http\Controllers\back\OrderController;
use App\Http\Controllers\back\ProductController;
use App\Http\Controllers\back\ProductImageController;
use App\Http\Controllers\back\ProfileController;
use App\Http\Controllers\back\SettingController;
use App\Http\Controllers\back\SliderController;
use App\Http\Controllers\back\SubmenuController;
use App\Http\Controllers\back\UserController;
use App\Http\Controllers\front\AccountController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\CommentController as FrontCommentController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\PaymentController;
use App\Http\Controllers\front\ProductController as FrontProductController;
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

// Start Back Routes

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('checkrole')->name('admin.dashboard.index');


Route::prefix('/admin/users')->middleware('checkrole')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('admin.users.index');
});

Route::prefix('/admin/profile')->middleware('checkrole')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('admin.profile.index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/update', [ProfileController::class, 'update'])->name('admin.profile.update');
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
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::get('/destroy/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});

Route::prefix('/admin/product-images')->middleware('checkrole')->group(function () {
    Route::get('/index', [ProductImageController::class, 'index'])->name('admin.productimages.index');
    Route::get('/create', [ProductImageController::class, 'create'])->name('admin.productimages.create');
    Route::post('/store', [ProductImageController::class, 'store'])->name('admin.productimages.store');
    Route::get('/edit/{productImage}', [ProductImageController::class, 'edit'])->name('admin.productimages.edit');
    Route::put('/update/{productImage}', [ProductImageController::class, 'update'])->name('admin.productimages.update');
    Route::get('/destroy/{productImage}', [ProductImageController::class, 'destroy'])->name('admin.productimages.destroy');
});

Route::prefix('/admin/comments')->middleware('checkrole')->group(function () {
    Route::get('/index', [CommentController::class, 'index'])->name('admin.comments.index');
    Route::get('/show/{comment}', [CommentController::class, 'show'])->name('admin.comments.show');
});

Route::prefix('/admin/orders')->middleware('checkrole')->group(function () {
    Route::get('/index', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/ChangeStatus/{order}', [OrderController::class, 'ChangeStatus'])->name('admin.orders.changestatus');
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

Route::prefix('/admin/attributes')->middleware('checkrole')->group(function () {
    Route::get('/index', [AttributeController::class, 'index'])->name('admin.attributes.index');
    Route::get('/create', [AttributeController::class, 'create'])->name('admin.attributes.create');
    Route::post('/store', [AttributeController::class, 'store'])->name('admin.attributes.store');
    Route::get('/edit/{attribute}', [AttributeController::class, 'edit'])->name('admin.attributes.edit');
    Route::put('/update/{attribute}', [AttributeController::class, 'update'])->name('admin.attributes.update');
    Route::get('/destroy/{attribute}', [AttributeController::class, 'destroy'])->name('admin.attributes.destroy');
});

// End Back Routes


// Start Front Route


// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

//Search Route
Route::get('/search', [FrontProductController::class, 'search'])->name('search');


// Dashboard Route
Route::prefix('/account')->middleware('checkrole')->group(function() {
    Route::get('/', [AccountController::class, 'index'])->name('account.index');
    Route::get('/orders', [AccountController::class, 'OrderList'])->name('account.orders');
    Route::get('/order/{order:code}', [AccountController::class, 'OrderDetails'])->name('account.order.details');
    Route::get('/edit', [AccountController::class, 'edit'])->name('account.edit');
    Route::put('/update', [AccountController::class, 'update'])->name('account.update');
});

// Cart Route
Route::prefix('/cart')->middleware('checkrole')->group(function() {
    Route::get('/checkout', [CartController::class, 'index'])->name('cart.index');
    Route::delete('/delete/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
});

//Product Routes
Route::get('/category-products/{cat}', [FrontProductController::class, 'ShowByCategory'])->name('product.show.by.category');
Route::get('/product/{product:slug}', [FrontProductController::class, 'show'])->name('product.show');
Route::get('/product/add-to-cart/{product}', [FrontProductController::class, 'AddToCart'])->name('product.add.to.cart');
Route::post('/comment/store/{product}' , [FrontCommentController::class, 'store'])->name('comment.store');


//Payment Route



// End Front Route
Route::get('/pay', [PaymentController::class, 'pay'])->name('pay');
Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');


Auth::routes();

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('home');
});