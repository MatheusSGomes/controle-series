<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/series');
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store']);