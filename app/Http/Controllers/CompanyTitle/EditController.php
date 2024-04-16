<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Models\CompanyTitle;

class EditController extends Controller
{

    public function __invoke(CompanyTitle $company_title)
    {
        return view('company_titles.edit', compact('company_title'));
    }
}
