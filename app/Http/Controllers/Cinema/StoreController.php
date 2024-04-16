<?php

namespace App\Http\Controllers\Cinema;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cinema\CinemaStoreRequest;
use App\Models\Cinema;

class StoreController extends Controller
{
    public function __invoke(CinemaStoreRequest $request)
    {
        Cinema::create($request->validated());
        return redirect('/cinemas');
    }
}
