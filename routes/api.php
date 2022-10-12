<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('getTask', [ApiController::class, 'getTask']);
Route::post('store', [ApiController::class, 'store']);