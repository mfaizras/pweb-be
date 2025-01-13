<?php

use App\Http\Controllers\DestinationController;
use App\Http\Resources\DestinationResource;
use App\Http\Resources\ResponseResource;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/destination',[DestinationController::class,'index']);
Route::get('/destination/{destination}',[DestinationController::class,'show']);
Route::post('/destination/add',[DestinationController::class,'store']);

require __DIR__.'/auth.php';
