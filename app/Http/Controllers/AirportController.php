<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AirportController extends Controller
{
    public function index(Request $request): View
    {
        return view('airport.index')->with([
            'airports' => Airport::all(),
            'request' => $request->all(),
        ]);
    }

    public function show(Airport $airport): View
    {
        return view('airport.show')->with([
            'airport' => $airport,
        ]);
    }

    public function edit(Airport $airport): View
    {
        return view('airport.edit')->with([
            'airport' => $airport,
        ]);
    }

    /**
     * @throws \Exception
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            Airport::query()->create([
                'name' => $request->input('name')
            ]);
        } catch (\Exception $exception) {
            Log::error('Failed', [
                'exception' => $exception->getMessage()
            ]);
            // TODO: Show error in view

            throw $exception;
        }

        return redirect(route('airports.index'));
    }

    public function update(Airport $airport): View
    {
        return view('airport.index');
    }

    public function create(): View
    {
        return view('airport.create');
    }

    public function destroy(Airport $airport): RedirectResponse
    {
        $airport->delete();

        return back();
    }
}
