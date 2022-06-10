<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Plane;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PlaneController extends Controller
{
    public function index(Request $request): View
    {
        return view('plane.index')->with([
            'planes' => Plane::all(),
            'request' => $request->all(),
        ]);
    }

    public function show(Plane $plane): View
    {
        return view('plane.show')->with([
            'plane' => $plane,
        ]);
    }

    public function edit(Plane $plane): View
    {
        return view('plane.edit')->with([
            'plane' => $plane,
        ]);
    }

    /**
     * @throws \Exception
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            Plane::query()->create([
                'passengers' => $request->input('passengers'),
                'refuel_time' => $request->input('refuel_time'),
                'jet' =>  $request->input('jet') === 'on',
                'propeller' =>  $request->input('propeller') === 'on',
            ]);
        } catch (\Exception $exception) {
            Log::error('Failed', [
                'exception' => $exception->getMessage()
            ]);

            // TODO: Show error in view

            throw $exception;
        }

        return redirect(route('planes.index'));
    }

    public function update(Plane $plane): View
    {
        return view('plane.index');
    }

    public function create(): View
    {
        return view('plane.create');
    }

    public function destroy(Plane $plane): RedirectResponse
    {
        $plane->delete();

        return back();
    }
}
