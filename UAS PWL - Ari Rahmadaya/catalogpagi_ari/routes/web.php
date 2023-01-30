<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ShoppingController;
use App\Http\Middleware\CekLogin;

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

Route::get('/shoppingari',[ShoppingController::class,'shoppingari']);
Route::post('/shoppingari',[ShoppingController::class,'shoppingari_proccess']);


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index2']);
Route::get('/catalog',[CatalogController::class,'index']);


Route::middleware(CekLogin::class)->group(function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('login',[AuthController::class,'login_process']);
    Route::get('register',[AuthController::class,'register']);
    Route::post('register',[AuthController::class,'register_process']);
});


Route::middleware(['auth'])->group(function () {
Route::get('logout',[AuthController::class,'logout']);
Route::get('category', [CategoryController::class,'index']);
Route::get('form',[CategoryController::class,'form']);
Route::post('form',[CategoryController::class,'form_process']);
Route::get('category_delete/{id}', [CategoryController::class,'del_process'])->name('catdel');
Route::get('category-edit/{id}', [CategoryController::class,'edit']);
Route::post('category-edit/{id}', [CategoryController::class,'edit_process']);

Route::get('product', [ProductController::class,'index']);
Route::get('product-add', [ProductController::class,'add']);
Route::post('product-add', [ProductController::class,'add_process']);
Route::get('product_delete/{id}', [ProductController::class,'delete_process'])->name('del');
Route::get('product-edit/{id}', [ProductController::class,'edit']);
Route::post('product-edit/{id}', [ProductController::class,'edit_process']);

Route::get('profile',[AuthController::class,'profile']);
Route::post('profile',[AuthController::class,'profile_process']);
});

