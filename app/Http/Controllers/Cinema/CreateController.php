<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $company_titles = CompanyTitle::all();
        return view('cinemas.create', compact('company_titles'));
    }
}
