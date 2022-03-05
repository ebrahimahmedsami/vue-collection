<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//register
Route::post('/create-account', [AuthenticationController::class, 'createAccount']);


//login user
Route::post('/signin', [AuthenticationController::class, 'signin']);


//using middleware
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/getUsers', [AuthenticationController::class, 'getUsers']);
    Route::get('/profile', [AuthenticationController::class, 'profile']);
    Route::post('/sign-out', [AuthenticationController::class, 'logout']);
});



