<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Models\CompanyTitle;

class DestroyController extends Controller
{

    public function __invoke(CompanyTitle $company_title)
    {
        $company_title->delete();
        return redirect('/company_titles');
    }
}
