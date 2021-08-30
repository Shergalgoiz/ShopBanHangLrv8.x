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

use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;

Route::GET('/', function () {
    return view('welcome');
});

Route::GET('admin/users/login', [LoginController::class, 'login'])->name('login');
Route::POST('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    #Admin
    Route::prefix('admin')->group(function () {
        Route::GET('/', [MainController::class, 'mainidx'])->name('admin');
        Route::GET('main', [MainController::class, 'mainidx']);
        #Menu
        Route::prefix('menus')->group(function () {
            Route::GET('add', [MenuController::class, 'create']);
            Route::POST('add', [MenuController::class, 'store']);
            Route::GET('list', [MenuController::class, 'listidx']);
            Route::GET('edit{menu}', [MenuController::class, 'show']);
            Route::DELETE('destroy', [MenuController::class, 'destroyidx']);
        });
    });
});