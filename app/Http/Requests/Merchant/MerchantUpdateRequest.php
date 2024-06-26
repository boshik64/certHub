<?php

namespace App\Http\Requests\Merchant;

use Illuminate\Foundation\Http\FormRequest;

class MerchantUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cinema_id' => 'required|exists:cinemas,id',
            'MID' => 'integer|required',
            'merchant_type' => 'string|required',
            'workstation' => 'string|required',
            'department_name' => 'string|required'
        ];
    }
}
