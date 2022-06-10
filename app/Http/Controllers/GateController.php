<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GateController extends Controller
{
    public function index(Request $request): View
    {
        return view('gate.index')->with([
            'gates' => Gate::all(),
            'request' => $request->all(),
        ]);
    }

    public function show(Gate $gate): View
    {
        return view('gate.show')->with([
            'gate' => $gate,
        ]);
    }

    public function edit(Gate $gate): View
    {
        return view('gate.edit')->with([
            'gate' => $gate,
        ]);
    }

    /**
     * @throws \Exception
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            Gate::query()->create([
                'number' => $request->input('number'),
                'international' =>  $request->input('international') === 'on',
                'size_small' =>  $request->input('size_small') === 'on',
                'state_free' =>  $request->input('state_free') === 'on',
            ]);
        } catch (\Exception $exception) {
            Log::error('Failed', [
                'exception' => $exception->getMessage()
            ]);

            // TODO: Show error in view

            throw $exception;
        }

        return redirect(route('gates.index'));
    }

    public function update(Gate $gate): View
    {
        return view('gate.index');
    }

    public function create(): View
    {
        return view('gate.create');
    }

    public function destroy(Gate $gate): RedirectResponse
    {
        $gate->delete();

        return back();
    }
}
