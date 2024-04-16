<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $cinemas = Cinema::all();
        return view('merchants.create', compact('cinemas'));
    }
}
