<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelAPIController;
use App\Http\Controllers\MessageAPIController;

Route::get('user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('channels',[ChannelAPIController::class,'index']); // Get all items
Route::get('channel/{id}', [ChannelAPIController::class,'show']); // Get a single item
Route::post('channel', [ChannelAPIController::class, 'store']);  // Create a new item
Route::put('channel/{id}', [ChannelAPIController::class, 'update']);  // Update an existing item
Route::delete('channel/{id}', [ChannelAPIController::class, 'destroy']); // Delete an item
Route::patch('channel/{id}', [ChannelAPIController::class, 'updatePartial']);
Route::post('channel/storeDP', [ChannelAPIController::class, 'storeDP']);

Route::post('message', [MessageAPIController::class, 'store']);  // Create a new item


