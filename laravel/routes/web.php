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
<<<<<<< HEAD
route::get('/menudiet/{id}/food', [menudietController::class,'show']);
Route::delete('/menudiet/{id}/delete', [menudietController::class, 'destroy']);
Route::get('/menudiet/{id}/edit', [menudietController::class, 'edit'])->name('post.edit');
Route::put('/menudiet/{id}/update', [menudietController::class, 'update'])->name('post.update');
=======
route::get('/menudiet/{id}/food', [menudietController::class, 'edit']);
>>>>>>> db56157227a1881bd20c2cf6d1934c2d729eaae7

//LOGIN REGISTER, PROFILE
Route::get('/Login', [HealthSisController::class, 'Login']);
Route::get('/LoginCheck', [HealthSisController::class, 'LoginCheck']);
Route::get('/logout', [HealthSisController::class, 'logout']);
Route::get('/register', [HealthSisController::class, 'create']);
Route::post('/store', [HealthSisController::class, 'store']);
Route::put('/HealthSis/{id}/update', [HealthSisController::class, 'update']);
Route::get('/HealthSis/{id}/edit', [HealthSisController::class, 'edit']);
Route::delete('/HealthSis/{id}', [HealthSisController::class, 'destroy']);
//Timeline
Route::get('/timeline', [PostController::class, 'index'])->name('post.index');
Route::get('/timeline/{id}/create-timeline', [PostController::class, 'create'])->name('post.create');
Route::post('/timeline/{id}/store', [PostController::class, 'store'])->name('post.store');
Route::put('/timeline/{id}/{iduser}/update', [PostController::class, 'update'])->name('post.update');
Route::get('/timeline/{id}/{iduser}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::get('/timeline', [PostController::class, 'index'])->name('post.index');
Route::get('/timeline/{id}/create-timeline', [PostController::class, 'create'])->name('post.create');
Route::post('/timeline/{id}/store', [PostController::class, 'store'])->name('post.store');
Route::put('/timeline/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::get('/timeline/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::get('/timeline/{id}/delete', [PostController::class, 'delete'])->name('post.delete');
//Artikel
Route::get('/artikel', function () {
    return view('Artikel');
});


//tesss
Route::get('/', function () {
    return view('welcome');
});
