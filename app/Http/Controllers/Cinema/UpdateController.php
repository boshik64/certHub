<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cinema\CinemaUpdateRequest;
use App\Models\Cinema;
use App\Models\CompanyTitle;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Cinema $cinema, CinemaUpdateRequest $request)
    {
        $cinema->update($request->validated());
//        return redirect('/cinemas/' . $cinema->id);
        return redirect()->route('cinemas.index', ['id' => $cinema->id]);
    }
}
