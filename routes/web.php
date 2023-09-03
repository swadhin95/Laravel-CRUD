<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\LetterController;

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




Route::get('/pdf',[PdfController::class,'Print']);

Route::get('/index',[LetterController::class,'index'])->name('index');
Route::get('/create',[LetterController::class,'create'])->name('create');
Route::post('/store',[LetterController::class,'store'])->name('store');
Route::get('/show',[LetterController::class,'show'])->name('show');
Route::get('/edit',[LetterController::class,'edit'])->name('edit');
Route::post('/update',[LetterController::class,'update'])->name('update');
Route::get('/destroy',[LetterController::class,'destroy'])->name('destroy');

// Route::resource('index',LetterController::class);




