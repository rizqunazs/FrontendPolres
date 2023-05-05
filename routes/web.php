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

Route::get('/token', function () {
    return csrf_token();
});
Route::group(['namespace' => 'web'], function () {
    Route::get('/', function () {
        return redirect(route('home'));
    });
    Route::view('/home','home')->name('home');
    Route::view('/berita','berita')->name('berita');
    Route::view('/berita-detail','berita-detail')->name('berita-detail');
    Route::view('/jurusan','jurusan')->name('jurusan');
    Route::view('/info-daftar','info-daftar')->name('info-daftar');
    Route::view('/login','login')->name('login');
});
Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
    Route::get('/login', function () {
        return redirect(route('user.dashboard'));
    });
    Route::view('/dashboard','dashboard')->name('dashboard');

    Route::group(['namespace' => 'User'], function () {

    });
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    
    
});

require __DIR__ . '/demo.php';
