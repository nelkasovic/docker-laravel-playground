<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index(): View
    {
        return view('airports')->with(['airports' => Airport::all()]);
    }
}
