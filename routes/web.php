<?php

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

Route::get('/', function () {

    // $locale = App::currentLocale();
    // dd($locale);
    return view('admin.pages.home');
})->name('home');

Route::get('/products',function(){

    return view('admin.pages.products');
})->name('products');

Route::get('/theme',function (){
    return view("admin.theme");
}
);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

