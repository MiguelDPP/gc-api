<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/recovery', [AuthController::class, 'sendEmailRecoveryPassword']);
Route::post('/validate-recovey-token', [AuthController::class, 'validateRecoveryToken']);
Route::post('/recovery-password', [AuthController::class, 'recoveryPassword']);
Route::post('/sendCodeEnableUser', [UserController::class, 'SendCodeEnableUser']); // Send code to enable user
Route::post('/enableUser', [UserController::class, 'enableUser']); // Enable user

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', [UserController::class, 'user']); // Get user information
    Route::patch('/user', [UserController::class, 'update']); // Update user information
    Route::post('/disable-user', [UserController::class, 'disableUser']); // Disable user


    Route::post('/logout', [AuthController::class, 'logout']);


    Route::group(['middleware' => ['admin']], function () {
        Route::get('/users', [AdminController::class, 'users']);
    });
});
