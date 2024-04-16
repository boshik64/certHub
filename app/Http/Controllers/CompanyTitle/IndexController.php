<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Models\CompanyTitle;

class IndexController extends Controller
{

    public function __invoke()
    {
        $company_titles = CompanyTitle::all();
        return view('company_titles.index', compact('company_titles'));
    }
}
