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
    return view('welcome');
});

Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
Route::view('alert', 'quickAlerts')->name('quickAlerts');


Route::group(['middleware' => 'auth'], function () {

    Route::view('/dashboard/admin', 'dashboard')->name('dashboard')->middleware('admin');
    Route::view('/dashboard/member', 'dashboard')->name('dashboard.member')->middleware('member');
});
