<?php

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
    return view('wordtopdf');
});

Route::get('word-to-pdf', [App\Http\Controllers\WordtoPDFController::class, 'index']);
Route::post('word-to-pdf', [App\Http\Controllers\WordtoPDFController::class, 'convert'])->name('word_to_pdf');