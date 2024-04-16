<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Merchant\MerchantStoreRequest;
use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(MerchantStoreRequest $request)
    {
        Merchant::create($request->validated());
        return redirect('/merchants');
    }
}
