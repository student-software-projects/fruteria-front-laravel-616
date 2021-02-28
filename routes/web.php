<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fruits;
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
    return view('welcome');
});

Route::get( '/inicio',[fruits::class,'index'])-> name('index');
Route::get( '/acerca',[fruits::class,'acercade'])-> name('acercade');
Route::get( '/servicio',[fruits::class,'domicilios'])-> name('domicilios');
Route::get( '/contact',[fruits::class,'contact'])-> name('contact');
