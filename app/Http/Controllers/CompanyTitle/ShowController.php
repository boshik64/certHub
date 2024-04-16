<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Models\CompanyTitle;

class ShowController extends Controller
{

    public function __invoke(CompanyTitle $company_title)
    {
        return view('company_titles.show', compact('company_title'));
    }
}
