<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    /**
     * @throws \Exception
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            Flight::query()->create([
                'number' => $request->input('number'),
                'start_time' => $request->input('start_time'),
                'landing_time' => $request->input('landing_time')
            ]);
        } catch (\Exception $exception) {
            Log::error('Failed', [
                'exception' => $exception->getMessage()
            ]);

            // TODO: Show error in view

            throw $exception;
        }

        return redirect(route('flights.index'));
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
