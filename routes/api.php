<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\OrderController;
use App\Models\Payment;

Route::get('/destination',[DestinationController::class,'index']);
Route::get('/destination/{destination}',[DestinationController::class,'show']);
Route::post('/destination/add',[DestinationController::class,'store']);

Route::get('/user', [AuthController::class,'user'])->middleware('auth:sanctum');

Route::get('/payment-method',function() {
    return response()->json([
        'code' => 200,
        'status' => 'success',
        'message' => 'Metode Bayar Didapatkan!',
        'data' => Payment::active()->get(),
    ]);
});

Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest')
    ->name('register');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/order/{order:trx_id}',[OrderController::class,'show'])->middleware(['auth:sanctum']);
Route::get('/order',[OrderController::class,'index'])->middleware(['auth:sanctum']);
Route::post('/new-order/{destination}',[OrderController::class,'store'])->middleware('auth:sanctum')->name('order');
