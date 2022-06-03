<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    public function index(Request $request): View
    {
        return view('planes')->with([
            'planes' => Plane::all(),
            'request' => $request->all(),
        ]);
    }
}
