<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\api\SendCodeController;
use App\Http\Controllers\api\ServicesController;
use App\Http\Controllers\api\auth\UserController;
use App\Http\Controllers\api\SugistionController;
use App\Http\Controllers\api\ComplaintsController;




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
    Route::get('sendCode/{status}', [SendCodeController::class, 'SendCode']);
    Route::post('verify', [SendCodeController::class, 'Verification']);
    Route::post('login', [UserController::class, 'Login']);
    Route::get('logout', [UserController::class, 'Logout']);
    Route::post('resetpassword', [UserController::class, 'resetPassword']);
    Route::post('forgetpassword', [UserController::class, 'forgetpassword']);
});
Route::group(['prefix' => 'services'], function () {
    Route::get('/', [ServicesController::class, 'getServices']);
    Route::post('/test', [ServicesController::class, 'test']);
    Route::get('/{id}', [ServicesController::class, 'getServicesById']);
    Route::post('/search', [ServicesController::class, 'searching']);
    Route::get('/categorie/{cat}', [ServicesController::class, 'getServicesByCat']);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(['prefix' => 'suggest'], function () {
        Route::post('/create', [SugistionController::class, 'store']);
    });
    Route::group(['prefix' => 'complaints'], function () {
        Route::post('/create', [ComplaintsController::class, 'store']);
    });
    Route::group(['prefix' => 'comment'], function () {
        Route::post('/create', [CommentController::class, 'store']);
    });
});
