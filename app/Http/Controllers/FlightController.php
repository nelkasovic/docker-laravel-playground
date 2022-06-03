<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(Request $request): View
    {
        return view('flights')->with([
            'flights' => Flight::all(),
            'request' => $request->all(),
        ]);
    }
}
