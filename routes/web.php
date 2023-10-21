<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\Admin\BaseController as AdminBaseController;
use App\Http\Controllers\UserController;

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

// ini route admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::controller(AdminBaseController::class)->group(function(){
        Route::get('/homee', 'index')->name('index.home');
    });
    Route::controller(UserController::class)->group(function(){
        Route::get('/user','user')->name('Admin.User.table');
        Route::get('/user', 'user')->name('Admin.User.createUser');
    });

});



Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');
