<?php

use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UsersController;
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
    Route::get('/logged-in-user', [UserController::class, 'loggedInUser']);
    Route::get('/get-users', [UsersController::class,  'getUsers']);
    Route::get('/user/{id}', [UsersController::class,  'getUser']);
    
    // Route::post('/update-user-image', [UserController::class, 'updateUserImage']);
    // // Route::patch('/update-user', [UserController::class, 'updateUser']);
    // Route::get('/users',[UsersController::class, 'users']);

    Route::get('/roles', [RoleController::class, 'index']);
    Route::get('/role/{id}', [RoleController::class, 'getRole']);
    Route::post('/add-role',[ RoleController::class, 'addRole']);
    Route::post('/update-role/{id}/{name}',[ RoleController::class, 'updateRole']);
    Route::delete('/role/{id}',[ RoleController::class, 'deleteRole']);
    // Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    // Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    // Route::resource('/permissions', PermissionController::class);
    // Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    // Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');

    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    // Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    // Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    // Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    // Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    // Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');


});
