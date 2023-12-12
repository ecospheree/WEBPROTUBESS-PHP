<?php

use App\Http\Controllers\HealthSisController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/Login', [HealthSisController::class, 'Login']);
Route::get('/LoginCheck', [HealthSisController::class, 'LoginCheck']);
Route::get('/register', [HealthSisController::class, 'create']);
Route::post('/store', [HealthSisController::class, 'store']);
Route::put('/HealthSis/{id}/update', [HealthSisController::class, 'update']);
Route::get('/HealthSis/{id}/edit', [HealthSisController::class, 'edit']);