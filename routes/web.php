<?php

use App\Http\Controllers\AnimalDetailsController;
use App\Http\Controllers\SearchController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/search', [SearchController::class, 'search']);
Route::get('/details/{id}', [AnimalDetailsController::class, 'show']);
Route::get('create', [AnimalController::class, 'index'])->name('index');
Route::get('edit/{id}', [AnimalController::class, 'edit'])->name('edit');
Route::put('update/{id}', [AnimalController::class, 'update'])->name('update');
Route::post('store', [AnimalController::class, 'store'])->name('store');
