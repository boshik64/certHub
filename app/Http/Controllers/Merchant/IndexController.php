<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $merchants = Merchant::all();
        return view('merchants.index', compact('merchants'));
    }
}
