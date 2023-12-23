<?php

use App\Http\Controllers\HealthSisController;
use App\Http\Controllers\menudietController;
use App\Http\Controllers\PostController;
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

//default admin profile
Route::get('/Profile', function () {
    return view('Profile');
});

//MenuDiet
Route::get('/menudiet', [menudietController::class, 'index']);
Route::get('/createmenudiet', [menudietController::class, 'create']);
Route::post('/storemenudiet', [menudietController::class, 'store']);
route::get('/menudiet/{id}/food', [menudietController::class,'edit']);

//LOGIN REGISTER, PROFILE
Route::get('/Login', [HealthSisController::class, 'Login']);
Route::get('/LoginCheck', [HealthSisController::class, 'LoginCheck']);
Route::get('/register', [HealthSisController::class, 'create']);
Route::post('/store', [HealthSisController::class, 'store']);
Route::put('/HealthSis/{id}/update', [HealthSisController::class, 'update']);
Route::get('/HealthSis/{id}/edit', [HealthSisController::class, 'edit']);

//Timeline
Route::get('/timeline', [PostController::class,'index'])->name('post.index');
Route::get('/timeline/{id}/create-timeline', [PostController::class,'create'])->name('post.create');
Route::post('/timeline/{id}/store', [PostController::class,'store'])->name('post.store');

//Artikel
Route::get('/artikel', function () {
    return view('Artikel');
});