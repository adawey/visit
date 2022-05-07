<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\SuggestionController;


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
    return view('admin1.service.singlepage');
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
            Route::get('/service/{id}', [ServiceController::class, 'getservocebyid'])->name('serviceId');
        });
        Route::group(['prefix' => 'Suggests'], function () {
            Route::get('/', [SuggestionController::class, 'suggestions'])->name('suggestions');
        });
        Route::group(['prefix' => 'complaints'], function () {
            Route::get('complaints', [ComplaintsController::class, 'complaints'])->name('complaints');
        });
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'index'])->name('users');
            Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroyuser');
            Route::delete('/{id}', [UserController::class, 'show'])->name('showuser');
            Route::get('/create', [UserController::class, 'create'])->name('createuser');
            Route::post('/store', [UserController::class, 'store'])->name('saveuser');

        });
    });
});
