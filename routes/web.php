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
    return view('components.index');
});
Route::get('/about', function () {
    return view('components.about');
});
Route::get('/team', function () {
    return view('components.team');
});

Route::get('/contact', function () {
    return view('components.contact');
});

//---catagories routes---

Route::get('/abstract', function () {
    return view('catagories.abstract');
});
Route::get('/nature', function () {
    return view('catagories.nature');
});

Route::get('/adventure', function () {
    return view('catagories.adventure');
});
Route::get('/city', function () {
    return view('catagories.city');
});
Route::get('/candid', function () {
    return view('catagories.candid');
});
Route::get('/bw', function () {
    return view('catagories.bw');
});
Route::get('/fashion', function () {
    return view('catagories.fashion');
});
Route::get('/wild', function () {
    return view('catagories.wild');
});
Route::get('/potrait', function () {
    return view('catagories.potrait');
});
Route::get('/astrography', function () {
    return view('catagories.astrography');
});
Route::get('/sports', function () {
    return view('catagories.sports');
});
Route::get('/architectural', function () {
    return view('catagories.architectural');
});

//---auth routes---
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function (){

    Route::get('/admin',function (){
        return view('admin.index');
    });

});

