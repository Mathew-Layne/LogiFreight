<?php

use App\Http\Controllers\LogoutController;
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


Route::view('login', 'login')->name('login')->middleware('authorized');
Route::view('register', 'register')->name('register')->middleware('authorized');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::view('alert', 'quickAlerts')->name('quickAlerts');


Route::group(['middleware' => 'auth'], function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware('dashboardredirect');
    Route::view('/dashboard/admin/items', 'items')->name('items');
    Route::view('/dashboard/admin/members', 'members')->name('members');
    Route::view('/dashboard/admin/manifest', 'manifest')->name('manifest');
    Route::view('/dashboard/admin/alerts', 'alerts')->name('alerts');
    Route::view('/dashboard/admin', 'dashboard')->name('dashboard.admin')->middleware('admin');
    Route::view('/dashboard/member', 'member-dashboard')->name('dashboard.member')->middleware('member');
});
