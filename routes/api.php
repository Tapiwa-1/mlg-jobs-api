<?php

use App\Http\Controllers\Api\DashboardController;
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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);
    // Route::get('/logged-in-user', [UserController::class, 'loggedInUser']);
    // Route::post('/update-user-image', [UserController::class, 'updateUserImage']);
    // // Route::patch('/update-user', [UserController::class, 'updateUser']);
    // Route::get('/users',[UsersController::class, 'users']);

});