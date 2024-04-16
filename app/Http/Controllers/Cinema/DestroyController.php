<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Cinema $cinema)
    {
//        dd($cinema);
        $cinema->delete();
        return redirect('/cinemas');
    }
}
