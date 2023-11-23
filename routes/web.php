<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Membuat semua rute CRUD untuk PostController
Route::resource('posts', PostController::class);