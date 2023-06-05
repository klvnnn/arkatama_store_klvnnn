<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
//Test
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
//end Test
Route::get('/dashboard-laravel', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//CRUD user
Route::get('/user', [UserController::class, 'index']);
Route::get('/add-user', [UserController::class, 'create']);
Route::post('/add-user-post', [UserController::class, 'store']);
Route::get('/edit/{id}',[UserController::class,'edit']);
Route::put('/update-user',[UserController::class,'update']);
Route::get('/delete/{id}',[UserController::class,'delete']);
//CRUD product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/add-product', [ProductController::class, 'create']);
Route::post('/add-product-post', [ProductController::class, 'store']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::put('/update-product', [ProductController::class, 'update']);
Route::get('/delete-product/{id}', [ProductController::class, 'delete']);
//Add slider
Route::get('/landing', [SliderController::class, 'index']);
Route::get('/add-slider', [SliderController::class, 'create']);
Route::post('/add-slider-post', [SliderController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function(){
    return ('Halaman Tidak Ditemukan');
});
require __DIR__.'/auth.php';
