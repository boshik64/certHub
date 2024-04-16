<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'cinema_name' => 'string|required',
            'company_title_id' => '',
        ]);
        Cinema::create($data);
        return redirect('/cinemas');
    }
}
