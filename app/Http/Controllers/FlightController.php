<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(Request $request): View
    {
        return view('flight.index')->with([
            'flights' => Flight::all(),
            'request' => $request->all(),
        ]);
    }

    public function show(Flight $flight): View
    {
        return view('flight.show')->with([
            'flight' => $flight,
        ]);
    }

    public function edit(Flight $flight): View
    {
        return view('flight.edit')->with([
            'flight' => $flight,
        ]);
    }

    public function store(): View
    {
        return view('flight.index');
    }

    public function update(Flight $flight): View
    {
        return view('flight.index');
    }

    public function create(): View
    {
        return view('flight.create');
    }

    public function destroy(Flight $flight): RedirectResponse
    {
        $flight->delete();

        return back();
    }
}
