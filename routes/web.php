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

Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/inventaire', function () { return view('inventory'); })->name('inventaire');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/pro', function () { return view('profil'); })->name('profi');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/profil', [App\Http\Controllers\UserController::class, 'get'])->name('profil');
  Route::get('/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect("/");
  });
