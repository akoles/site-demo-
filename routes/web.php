<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menuset;

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

Route::get('/', function (string $home = 'defoult') {
    return view('welcome');
});

Route::get('/saymyname/{name?}/', function (string $name = 'default') {
    return view('saymyname', ['name' => $name]);
});
Route::resource('menusets', \App\Http\Controllers\MenusetController::class );



Route::get('/Currencies', function () {
    return view('currencies');
});

Route::get('/account', function () {
    return view('account');
});


Route::get('/Privacysettings', function () {
    return view('');
});
Route::get('/Exit', function () {
    return view('welcome');
});


Route::get('/Settings', function () {
    return view('Settings');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/footerset', \App\Http\Controllers\FooterController::class );

Route::get('Api',[\App\Http\Controllers\ApiController::class,'index']);
