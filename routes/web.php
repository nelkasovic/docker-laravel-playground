<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\GateController;
use App\Http\Controllers\PlaneController;
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
 * Route::get('airports', function() {
 * return view('airports')->with(['airports' => Airport::all()]);
 * })->name('airports');
 *
 * Route::get('flights', function() {
 * return view('flights')->with(['flights' => Flight::all()]);
 * })->name('flights');
 *
 * Route::get('gates', function() {
 * return view('gates')->with(['gates' => Gate::all()]);
 * })->name('gates');
 *
 * Route::get('planes', function() {
 * return view('planes')->with(['planes' => Plane::all()]);
 * })->name('planes');
 */

/*Route::get('gates', [GateController::class, 'index'])->name('gates');
Route::get('planes', [PlaneController::class, 'index'])->name('planes');
Route::get('flights', [FlightController::class, 'index'])->name('flights');*/

// Airport
/*Route::get('airports', [AirportController::class, 'index'])->name('airports.index');
Route::get('airports/{airport}/show', [AirportController::class, 'show'])->name('airports.show');
Route::get('airports/{airport}/edit', [AirportController::class, 'edit'])->name('airports.edit');
Route::get('airports/create', [AirportController::class, 'create'])->name('airports.create');
Route::put('airports/{airport}', [AirportController::class, 'update'])->name('airports.update');
Route::delete('airports/{airport}', [AirportController::class, 'destroy'])->name('airports.destroy');*/

Route::resource('airports', AirportController::class);
Route::resource('gates', GateController::class);
Route::resource('planes', PlaneController::class);
Route::resource('flights', FlightController::class);





