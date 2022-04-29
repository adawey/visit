<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\adminController;

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

// Route::group(['middleware'=>'admin'],function () {
//     // Route::get('/login', 'AdminPostsController');

//     Route::get('/', function () {
//         return 'admin';
//     });
// });

Route::get('/adawe', function () {
    return view('admin2.layout');
});
Route::get('/adawe2', function () {
    return view('admin1.service.create');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('check', [adminController::class, 'check']);
    Route::any('login', [adminController::class, 'login'])->name('adminlogin');
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', [adminController::class, 'index'])->name('start');

        Route::any('logout', [adminController::class, 'logout']);
        Route::group(['prefix' => 'services'], function () {
            Route::get('create', [adminController::class, 'create'])->name('create_serve');
            Route::post('store', [adminController::class, 'store'])->name('store_serve');
            Route::get('edit/{id}', [adminController::class, 'edit'])->name('edit_serve');
            Route::patch('update/{id}', [adminController::class, 'update'])->name('update_serve');
            Route::delete('store/destroy/{id}', [adminController::class, 'destroy'])->name('destroy_serve');
        });
    });
});
