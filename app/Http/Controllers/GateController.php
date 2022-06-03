<?php

namespace App\Http\Controllers;

use App\Models\Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GateController extends Controller
{
    public function index(Request $request): View
    {
        return view('gates')->with([
            'gates' => Gate::all(),
            'request' => $request->all(),
        ]);
    }
}
