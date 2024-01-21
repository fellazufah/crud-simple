<?php

use App\Http\Controllers\AnimalController;
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
    return view('welcome');
});

Route::get('/animal', [AnimalController::class, 'index'])->name('animal'); 

Route::get('/tambahanimal', [AnimalController::class, 'tambahanimal'])->name('tambahanimal'); 
Route::post('/insertanimal', [AnimalController::class, 'insertanimal'])->name('insertanimal'); 

Route::get('/tampilanimal/{id}', [AnimalController::class, 'tampilanimal'])->name('tampilanimal'); 
Route::post('/updateanimal/{id}', [AnimalController::class, 'updateanimal'])->name('updateanimal'); 

Route::get('/delete/{id}', [AnimalController::class, 'delete'])->name('delete');