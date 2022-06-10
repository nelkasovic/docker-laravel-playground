<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function store(): View
    {
        return view('plane.index');
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
