<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;

Route::get('/', [ForumController::class, 'index']);

Route::get('/create', [ForumController::class, 'create']);
Route::post('/create', [ForumController::class, 'store']);

Route::get('/topic/{id}', [ForumController::class, 'show']);
Route::post('/topic/{id}/reply', [ForumController::class, 'reply']);