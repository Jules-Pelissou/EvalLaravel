<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get
Route::get('recettes', [App\Http\Controllers\RecettesController::class, 'getSpeRecettes']);
Route::delete('/recettes/{id}', [App\Http\Controllers\RecettesController::class, 'delete']);
Route::put('/recettes/{id}', [App\Http\Controllers\RecettesController::class, 'modif']);

