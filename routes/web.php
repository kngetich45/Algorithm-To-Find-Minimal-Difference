<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MinimalDifferenceFinderController;



Route::get('/', [MinimalDifferenceFinderController::class, 'index']);
Route::post('/', [MinimalDifferenceFinderController::class, 'getMinimalDifference']);

