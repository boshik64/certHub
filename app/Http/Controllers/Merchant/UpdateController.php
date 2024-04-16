<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Merchant\MerchantUpdateRequest;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Merchant $merchant, MerchantUpdateRequest $request)
    {
        $merchant->update($request->validated());
        return redirect('/merchants/' . $merchant->id);

    }
}
