<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GSquaterlyController;
use App\Models\GSquaterly;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [GSquaterlyController::class, 'index']);

Route::post('/upload', [GSquaterlyController::class, 'upload']);

Route::get('/batch', [GSquaterlyController::class, 'batch']);

Route::get('/getquaterdata', [GSquaterlyController::class, 'getquaterdata']);

Route::get('/progress-bar', [GSquaterlyController::class, 'progressbar']);

