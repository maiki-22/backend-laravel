<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\artistController;
use App\Http\Controllers\Api\trackController;
use App\Http\Controllers\Api\albumController;

//Rutas de artistas
Route::get('/artist',[artistController::class,'getAll']);

Route::get('/artist/{id}',[artistController::class,'show']);

Route::post('/artist',[artistController::class,'create']);

Route::put('/artist/{id}', [artistController::class,'update']);

Route::delete('/artist/{id}', [artistController::class,'delete']);

// consultas mas avanzadas 
Route::get('/artist/{id}/tracks', [artistController::class, 'getTracks']);


//Rutas de canciones

Route::get('/track',[trackController::class,'getAll']);

Route::get('/track/{id}',[trackController::class,'show']);

Route::post('/track',[trackController::class,'create']);

Route::put('/track/{id}', [trackController::class,'update']);

Route::delete('/track/{id}', [trackController::class,'delete']);

// Rutas de albumes

Route::get('/album',[albumController::class,'getAll']);

Route::get('/album/{id}',[albumController::class,'show']);

Route::post('/album',[albumController::class,'create']);

Route::put('/album/{id}', [albumController::class,'update']);

Route::delete('/album/{id}', [albumController::class,'delete']);