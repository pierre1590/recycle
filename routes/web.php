<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeekController;
use App\Http\Controllers\TodayController;
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

Route::view('/', 'pages.home')->name('home');

//Resource Calendar
Route::get('/calendar',[WeekController::class, 'index'])->name('calendar.index');
Route::get('/calendar', [WeekController::class,'show'])->name('calendar.show');
Route::get('/calendar/create', [WeekController::class, 'create'])->name('calendar.create');
Route::post('/calendar',[WeekController::class, 'store'])->name('calendar.store');

//Resource Today
Route::get('/today', [TodayController::class,'show'])->name('today.show');