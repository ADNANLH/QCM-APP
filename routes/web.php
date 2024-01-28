<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamensController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/examens', [ExamensController::class, 'index'])->name('examens.index');
Route::get('/examens/add', [ExamensController::class, 'add'])->name('examens.add');
Route::get('/examens/edit', [ExamensController::class, 'edit'])->name('examens.edit');

Auth::routes();
