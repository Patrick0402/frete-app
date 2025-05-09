<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FreteController;

Route::get('/fretes', [FreteController::class, 'index']);
Route::get('/fretes/filtrados', [FreteController::class, 'filter']);
