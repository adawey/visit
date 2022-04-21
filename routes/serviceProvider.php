<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceProviderController;
use App\Http\Controllers\AreaController;
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


Route::group(['prefix' => 'serviceprovider'], function () {
    Route::get('check', [serviceProviderController::class, 'check']);
    Route::any('login', [serviceProviderController::class, 'login'])->name('login_provider');
    Route::group(['middleware' => 'serviceProvider'], function () {
        Route::any('/logout', [serviceProviderController::class, 'logout'])->name('provlogout');
        Route::get('/', [serviceProviderController::class, 'index'])->name('start_provider');
        Route::group(['prefix' => 'services'], function () {
            Route::get('create', [serviceProviderController::class, 'create'])->name('create_provider');
            Route::post('store/', [serviceProviderController::class, 'store'])->name('store_provider');
            Route::get('edit/{id}', [serviceProviderController::class, 'edit'])->name('edit_provider');
            Route::patch('update/{id}', [serviceProviderController::class, 'update'])->name('update_provider');
            Route::delete('destroy/{id}', [serviceProviderController::class, 'destroy'])->name('destroy_provider');
        });
        Route::group(['prefix' => 'area'], function () {
            Route::post('/getarea', [AreaController::class, 'getArea'])->name('getarea1');
            Route::post('/apireq', [AreaController::class, 'apireq'])->name('apireq1');
        });
    });
});
