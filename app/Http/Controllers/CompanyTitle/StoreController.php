<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyTitle\CompanyTitleStoreRequest;
use App\Models\CompanyTitle;

class StoreController extends Controller
{

    public function __invoke(CompanyTitleStoreRequest $request)
    {
        CompanyTitle::create($request->validated());
        return redirect('/company_titles');
    }
}
