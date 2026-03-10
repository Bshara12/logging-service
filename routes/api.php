<?php

use App\Http\Controllers\LogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');


Route::get('/logs', [LogController::class, 'index']);
Route::get('/audit-logs', [LogController::class, 'auditLogs']);
