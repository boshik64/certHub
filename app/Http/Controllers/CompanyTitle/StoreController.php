<?php

namespace App\Http\Controllers\CompanyTitle;

use App\Http\Controllers\Controller;
use App\Models\CompanyTitle;

class StoreController extends Controller
{

    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'string|required'
        ]);
        CompanyTitle::create($data);
        return redirect('/company_titles');
    }
}
