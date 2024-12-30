<?php

use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\Admin\PizzaController;
use App\Http\Controllers\CashbookController;
use App\Http\Controllers\CashbookDetailController;
use App\Http\Controllers\ChartofAccountController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfitAndLossController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('chart_accounts', ChartofAccountController::class);
    Route::resource('/classification', ClassificationController::class);
    Route::resource('account_type', AccountTypeController::class);
    Route::resource('cashbook', CashbookController::class);
    Route::resource('profit_loss', ProfitAndLossController::class);
    Route::resource('cashbook_detail', CashbookDetailController::class);
});
