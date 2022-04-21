<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\api\SendCodeController;
use App\Http\Controllers\api\ServicesController;
use App\Http\Controllers\api\auth\UserController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::group(['prefix' => 'users'], function () {

    // route register new user
    Route::post('register', [RegisterController::class, 'RegisterUser']);
    Route::get('sendCode', [SendCodeController::class, 'SendCode']);
    Route::post('verify', [SendCodeController::class, 'Verification']);
    Route::post('login', [UserController::class, 'Login']);
    Route::get('logout', [UserController::class, 'Logout']);
});
Route::group(['prefix' => 'services'], function () {
    Route::get('/', [ServicesController::class, 'getServices']);
    Route::get('/{id}', [ServicesController::class, 'getServicesById']);
    Route::post('/search', [ServicesController::class, 'searching']);
});
