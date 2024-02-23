<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\OwnerController;
use Doctrine\DBAL\Schema\Index;

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
    return view('welcome');
});

Route::get('/animals', [AnimalController::class, 'index']);
Route::get('/owners', [OwnerController::class, 'index']);
Route::get('edit/{id}', [AnimalController::class, 'edit'])->name('edit');
Route::put('edit/{id}', [AnimalController::class, 'update'])->name('update');
Route::get('create', [AnimalController::class, 'index'])->name('create');
Route::get('edit', [AnimalController::class, 'index'])->name('index');
Route::post('create', [AnimalController::class, 'store'])->name('store');
