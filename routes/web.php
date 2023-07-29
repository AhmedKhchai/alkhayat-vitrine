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
Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function () {
        return view('Home');
    })->name('home');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/collections', function () {
        return view('collections');
    })->name('collections');
    
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::post('/contact', 'App\Http\Controllers\ContactController@saveContact')->name('saveContact');
    Route::get('/BestSellers', function () {
        return view('BestSellers');
    })->name('BestSellers');
    Route::get('/WinterCollection', function () {
        return view('WinterCollection');
    })->name('WinterCollection');
    Route::get('/SummerCollection', function () {
        return view('SummerCollection');
    })->name('SummerCollection');
});
