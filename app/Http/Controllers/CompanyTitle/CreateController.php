<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Models\CompanyTitle;

class CreateController extends Controller
{

    public function __invoke()
    {
        return view('company_titles.create');
    }
}
