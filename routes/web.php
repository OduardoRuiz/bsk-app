<?php

use App\Http\Controllers\StoreController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [StoreController::class, 'index'])->name('stores');

Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');

Route::get('/store/edit/{store}', [StoreController::class, 'edit'])->name('store.edit');

Route::patch('/store/update/{store}', [StoreController::class, 'update'])->name('store.update');

Route::delete('/store/{id}', [StoreController::class, 'destroy'])->name('store.destroy');