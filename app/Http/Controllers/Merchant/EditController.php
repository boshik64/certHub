<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Merchant $merchant)
    {
        $cinemas = Cinema::all();
        return view('merchants.edit', compact('merchant','cinemas'));
    }
}
