<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        $merchants = Merchant::all();
        return view('merchants.index', compact('merchants'));
    }

    public function create()
    {
        $cinemas = Cinema::all();
        return view('merchants.create', compact('cinemas'));
    }

    public function store()
    {
        $data = request()->validate([
            'cinema_id' => '',
            'MID' => 'integer|required',
            'merchant_type' => 'string|required',
            'workstation' => 'string|required',
            'department_name' => 'string|required'
        ]);
        Merchant::create($data);
        return redirect('/merchants');
    }

    public function show(Merchant $merchant)
    {
        return view('merchants.show', compact('merchant'));
    }

    public function edit(Merchant $merchant)
    {
        $cinemas = Cinema::all();
        return view('merchants.edit', compact('merchant','cinemas'));
    }

    public function update(Merchant $merchant)
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

    public function destroy(Merchant $merchant)
    {
        $merchant->delete();
        return redirect('/merchants');
    }
}
