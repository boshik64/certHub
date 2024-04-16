<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Merchant $merchant)
    {
        $data = request()->validate([
            'cinema_id' => '',
            'MID' => 'integer|required',
            'merchant_type' => 'string|required',
            'workstation' => 'string|required',
            'department_name' => 'string|required'
        ]);
        $merchant->update($data);
        return redirect('/merchants/' . $merchant->id);

    }
}
