<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Models\CompanyTitle;

class UpdateController extends Controller
{

    public function __invoke(CompanyTitle $company_title)
    {
        $data = request()->validate([
            'title' => 'string|required'
        ]);
        $company_title->update($data);
        return redirect('/company_titles/' . $company_title->id);
    }
}
