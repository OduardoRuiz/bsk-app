<?php

use App\Http\Controllers\ScheduleController;
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

//Route::get('/', [StoreController::class, 'index'])->name('stores');

Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');

Route::get('/store/edit/{store}', [StoreController::class, 'edit'])->name('store.edit');

Route::patch('/store/update/{store}', [StoreController::class, 'update'])->name('store.update');

Route::delete('/store/{id}', [StoreController::class, 'destroy'])->name('store.destroy');


//Agenda de shows
//Route::get('/', [ScheduleController::class, 'index'])->name('schedules');
Route::get('/', function () {
    $storeController = new StoreController();
    $storeData = $storeController->index()->getData()['stores'];

    $scheduleController = new ScheduleController();
    $scheduleData = $scheduleController->index()->getData()['schedules'];

    // Combine os dados em uma única array
    $combinedData = compact('storeData', 'scheduleData');

    return view('index', $combinedData);
})->name('index');