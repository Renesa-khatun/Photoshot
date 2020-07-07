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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function (){

    Route::get('/admin',function (){
        return view('admin.index');
    });

});

