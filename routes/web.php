<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('clients', App\Http\Controllers\ClientsController::class)->except('edit', 'update', 'destroy');

    Route::resource('projects', App\Http\Controllers\ProjectsController::class)->except('edit', 'update', 'destroy');
    
    Route::resource('issues', App\Http\Controllers\IssuesController::class)->except('edit', 'update', 'destroy');

    
    // Route::prefix('/users')->group(function(){
    //     Route::get('/{id}/activate', [App\Http\Controllers\UsersController::class, 'activate']);
    //     Route::get('/{id}/deactivate', [App\Http\Controllers\UsersController::class, 'deactivate']);
    // });

    Route::resource('users', App\Http\Controllers\UserController::class);
});