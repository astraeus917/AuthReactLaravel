<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::post('users/login', [UserController::class, 'login'])->name('users.login');
Route::post('users/register', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show']);
Route::put('/users/{id}/change-password', [UserController::class, 'changePassword']);