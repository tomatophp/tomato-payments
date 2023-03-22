<?php

namespace TomatoPHP\TomatoPayments\Http\Requests\KhaledsPaymentMethod;

use Illuminate\Foundation\Http\FormRequest;

class KhaledsPaymentMethodStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                        'method' => 'required|max:255|string',
            'name' => 'required|max:255|string',
            'description' => 'nullable|max:255|string',
            'color' => 'nullable|max:255',
            'icon' => 'nullable|max:255',
            'is_active' => 'required'
        ];
    }
}
