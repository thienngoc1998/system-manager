<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.show-form-login')->middleware('guest:admins');
Route::post('/admin/login', [AuthController::class, 'attemptLogin'])->name('admin.attempt-login')->middleware('guest:admins');

Route::get('/user/login', [LoginController::class, 'showLoginForm'])->name('user.show-form-login')->middleware('guest:web');
Route::post('/user/login', [LoginController::class, 'attemptLogin'])->name('user.attempt-login')->middleware('guest:web');


Route::group([
    'as' => 'admin.',
    'middleware' => ['auth:admins'],
], function () {
    Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashBoardController::class, 'index'])->name('dashboard');
    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group([
    'as' => 'user.',
    'middleware' => ['auth:web'],
], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/user/logout', [LoginController::class, 'logout'])->name('logout');
});



//Route::group(
//    [
//        'as' => 'admin_theme.',
//        'middleware' => ['guest:admins'],
//    ],
//    function () {
//        Route::get('/admin_auth/login', [AuthController::class, 'showLogxinForm'])->name('showLoginForm');
//
//    }
//);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('web');
