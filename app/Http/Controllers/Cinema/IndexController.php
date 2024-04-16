<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cinemas = Cinema::all();
        return view('cinemas.index', compact('cinemas'));
    }
}
