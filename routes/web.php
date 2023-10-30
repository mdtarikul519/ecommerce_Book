<?php

use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\banner\BannerController;
use App\Http\Controllers\product\ProductCategoryController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\product\ProductTagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRoleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isAdmin');



Route::get('/pages', [App\Http\Controllers\Admin\PagesController::class, 'index'])->name('pages');
Route::get('/pages/create', [App\Http\Controllers\Admin\PagesController::class, 'create'])->name('pages.create');




Route::group(['prefix' => 'user-role'], function () {
    Route::get('/create',  [UserRoleController::class, 'create'])->name('dashboard.role.create');
    Route::post('/store', [UserRoleController::class, 'store'])->name('dashboard.role.store');
    Route::get('/view', [UserRoleController::class, 'view'])->name('dashboard.role.view');
    Route::get('/edit/{id}', [UserRoleController::class, 'edit'])->name('dashboard.role.edit');
    Route::post('/update/{id}', [UserRoleController::class, 'update'])->name('dashboard.role.update');
    Route::get('/destory/{id}', [UserRoleController::class, 'destory'])->name('dashboard.role.destory');
})->middleware('isAdmin');


Route::group(['prefix' => 'user'], function () {
    Route::get('/create',  [UserController::class, 'create'])->name('dashboard.user.create');
    Route::post('/store', [UserController::class, 'store'])->name('dashboard.user.store');
    Route::get('/view', [UserController::class, 'view'])->name('dashboard.user.view');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('dashboard.user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('dashboard.user.update');
    Route::get('/destory/{id}', [UserController::class, 'destory'])->name('dashboard.user.destory');
    Route::get('/details/{id}', [UserController::class, 'details'])->name('dashboard.user.details');
})->middleware('isAdmin');


Route::group(['prefix' => 'product-category'], function () {
    Route::get('/create',  [ProductCategoryController::class, 'create'])->name('dashboard.product_category.create');
    Route::post('/store', [ProductCategoryController::class, 'store'])->name('dashboard.product_category.store');
    Route::get('/view', [ProductCategoryController::class, 'view'])->name('dashboard.product_category.view');
    Route::get('/edit/{id}', [ProductCategoryController::class, 'edit'])->name('dashboard.product_category.edit');
    Route::post('/update/{id}', [ProductCategoryController::class, 'update'])->name('dashboard.product_category.update');
    Route::get('/destory/{id}', [ProductCategoryController::class, 'destory'])->name('dashboard.product_category.destory');
    Route::get('/details/{id}', [ProductCategoryController::class, 'details'])->name('dashboard.product_category.details');
})->middleware('isAdmin');


Route::group(['prefix' => 'product-tag'], function () {
    Route::get('/create',  [ProductTagController::class, 'create'])->name('dashboard.product_tag.create');
    Route::post('/store', [ProductTagController::class, 'store'])->name('dashboard.product_tag.store');
    Route::get('/view', [ProductTagController::class, 'view'])->name('dashboard.product_tag.view');
    Route::get('/edit/{id}', [ProductTagController::class, 'edit'])->name('dashboard.product_tag.edit');
    Route::post('/update/{id}', [ProductTagController::class, 'update'])->name('dashboard.product_tag.update');
    Route::get('/destory/{id}', [ProductTagController::class, 'destory'])->name('dashboard.product_tag.destory');
    Route::get('/details/{id}', [ProductTagController::class, 'details'])->name('dashboard.product_tag.details');
})->middleware('isAdmin');



Route::group(['prefix' => 'banner'], function () {
    Route::get('/create',  [BannerController::class, 'create'])->name('dashboard.banner.create');
    Route::post('/store', [BannerController::class, 'store'])->name('dashboard.banner.store');
    Route::get('/view', [BannerController::class, 'view'])->name('dashboard.banner.view');
    Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('dashboard.banner.edit');
    Route::post('/update/{id}', [BannerController::class, 'update'])->name('dashboard.banner.update');
    Route::get('/destory/{id}', [BannerController::class, 'destory'])->name('dashboard.banner.destory');
    Route::get('/details/{id}', [BannerController::class, 'details'])->name('dashboard.banner.details');
})->middleware('isAdmin');


Route::group(['prefix' => 'product'], function () {
    Route::get('/create',  [ProductController::class, 'create'])->name('dashboard.product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('dashboard.product.store');
    Route::get('/view', [ProductController::class, 'view'])->name('dashboard.product.view');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('dashboard.product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('dashboard.product.update');
    Route::get('/destory/{id}', [ProductController::class, 'destory'])->name('dashboard.product.destory');
    Route::get('/details/{id}', [ProductController::class, 'details'])->name('dashboard.product.details');
})->middleware('isAdmin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
