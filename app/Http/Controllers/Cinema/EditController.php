<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Cinema $cinema)
    {
        $company_titles = CompanyTitle::all();
        return view('cinemas.edit', compact('cinema', 'company_titles'));
    }
}
