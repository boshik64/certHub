<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Cinema $cinema)
    {
        $data = request()->validate([
            'cinema_name' => 'string|required',
            'company_title_id' => '',
        ]);
        $cinema->update($data);
        return redirect('/cinemas/' . $cinema->id);
    }
}
