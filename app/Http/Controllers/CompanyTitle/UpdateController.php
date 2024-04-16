<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyTitle\CompanyTitleUpdateRequest;
use App\Models\CompanyTitle;

class UpdateController extends Controller
{

    public function __invoke(CompanyTitle $company_title, CompanyTitleUpdateRequest $request)
    {
        $company_title->update($request->validated());
        return redirect('/company_titles/' . $company_title->id);
    }
}
