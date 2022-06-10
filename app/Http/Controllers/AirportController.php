<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index(Request $request): View
    {
        return view('airports')->with([
            'airports' => Airport::all(),
            'request' => $request->all(),
        ]);
    }

    public function show(Airport $airport): void
    {
        //$airport = Airport::query()->find($id);
        dd($airport);
    }
}
