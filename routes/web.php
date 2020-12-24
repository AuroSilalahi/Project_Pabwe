<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
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

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
// auth
// auth -> admin || visitor

Route::group(['middleware' => ['auth']], function(){
   Route::group(['middleware'=>['cek_login:admin']], function(){
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
   }); 
   Route::group(['middleware'=>['cek_login:visitor']], function(){
        Route::get('visitor','App\Http\Controllers\VisitorController@index')->name('visitor');
        Route::get('detail/{id}','App\Http\Controllers\VisitorController@detail')->name('detail');        
   }); 
});
