<?php

use App\Http\Controllers\Admin\PizzaController;
use App\Http\Controllers\ChartofAccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('pizza',PizzaController::class);
Route::resource('chart_accounts', ChartofAccountController::class);
