<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('Frontend.wlcome');
});

Route::get('/', function () {
    return view('Frontend.wlcome');
});
Route::get('admin/create', function () {
    return view('admin.products.create');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);
Route::post('/admin/products/store', [App\Http\Controllers\ProductController::class, 'create']);
Route::get('/admin/products/show', [App\Http\Controllers\ProductController::class, 'show']);
