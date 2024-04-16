<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Merchant $merchant)
    {
        $merchant->delete();
        return redirect('/merchants');
    }
}
