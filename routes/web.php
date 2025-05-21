<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;


Route::get('/', [JokeController::class, 'index']); // <- padod jokus sākumlapai
