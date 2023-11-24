<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Rute Resource untuk User
Route::resource('users', UserController::class);