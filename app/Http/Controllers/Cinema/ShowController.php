<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Cinema $cinema)
    {
        return view('cinemas.show', compact('cinema'));
    }
}
