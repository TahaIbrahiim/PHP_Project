<?php

use App\Http\Controllers\UserController;
use  App\Models\Product;
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
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');

Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])
    ->name('user.edit');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user.create');

Route::put('/user/update/{id}', [UserController::class, 'update'])
    ->name('user.update');

Route::post('/user/store', [UserController::class, 'store'])
    ->name('user.store');





