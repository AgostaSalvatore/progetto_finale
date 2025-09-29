<?php

use App\Http\Controllers\Api\VideogameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// api controller index
Route::get('videogames', [VideogameController::class, 'index']);

// api controller show
Route::get('videogames/{videogame}', [VideogameController::class, 'show']);
