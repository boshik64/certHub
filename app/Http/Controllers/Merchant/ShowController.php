<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Merchant $merchant)
    {
        return view('merchants.show', compact('merchant'));
    }
}
