<?php

namespace App\Http\Controllers;

use App\Models\Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function store(): View
    {
        return view('gate.index');
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
