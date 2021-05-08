<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[\App\Http\Controllers\VacancyController::class,'index'])->name('vacancy.index');
Route::get('create',[\App\Http\Controllers\VacancyController::class,'create'])->name('vacancy.create');
Route::post('store',[\App\Http\Controllers\VacancyController::class,'store'])->name('vacancy.store');
Route::get('edit/{id}',[\App\Http\Controllers\VacancyController::class,'edit'])->name('vacancy.edit');
Route::match(['put', 'patch'],'update/{id}',[\App\Http\Controllers\VacancyController::class,'update'])->name('vacancy.update');
Route::post('destroy/{id}',[\App\Http\Controllers\VacancyController::class,'destroy'])->name('vacancy.destroy');
//Route::resource('vacancy', \App\Http\Controllers\VacancyController::class);
//Route::resource('items', ItemController::class,['names'=>'items']);

//Route::redirect('items', '/');
