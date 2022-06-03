<?php

use App\Http\Controllers\AirportController;
use App\Models\Airport;
use App\Models\Flight;
use App\Models\Gate;
use App\Models\Plane;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// System
Auth::routes();

// Custom
Route::get('/', fn() => view('welcome'));
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Flugplatz
//Route::get('planes', fn() => view('planes'))->name('planes');
//Route::get('gates', fn() => view('gates'))->name('gates');
// Route::get('flights', fn() => view('flights'))->name('flights');
// Route::get('airports', fn() => view('airports'))->name('airports');

/**
Route::get('airports', function() {
    return view('airports')->with(['airports' => Airport::all()]);
})->name('airports');

Route::get('flights', function() {
    return view('flights')->with(['flights' => Flight::all()]);
})->name('flights');

Route::get('gates', function() {
    return view('gates')->with(['gates' => Gate::all()]);
})->name('gates');

Route::get('planes', function() {
    return view('planes')->with(['planes' => Plane::all()]);
})->name('planes');
*/

Route::get('airports', [AirportController::class, 'index'])->name('airports');
Route::get('gates', [AirportController::class, 'index'])->name('gates');
Route::get('planes', [AirportController::class, 'index'])->name('planes');
Route::get('flights', [AirportController::class, 'index'])->name('flights');

