<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// System
Auth::routes();

// Custom
Route::get('/', fn() => view('welcome'));
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('orders', OrderController::class);

Route::get('orders/step/one/{article}', [OrderController::class, 'stepOne'])->name('orders.step-one');
Route::post('orders/step/two', [OrderController::class, 'stepTwo'])->name('orders.step-two');




