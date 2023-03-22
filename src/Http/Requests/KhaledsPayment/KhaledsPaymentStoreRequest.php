<?php

namespace TomatoPHP\TomatoPayments\Http\Requests\KhaledsPayment;

use Illuminate\Foundation\Http\FormRequest;

class KhaledsPaymentStoreRequest extends FormRequest
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
                        'model_id' => 'required',
            'model_table' => 'required|max:255|string',
            'order_id' => 'required',
            'order_table' => 'required|max:255|string',
            'payment_method' => 'required|max:255|string',
            'payment_status' => 'required|max:255|string',
            'transaction_code' => 'nullable|max:255|string',
            'amount' => 'required',
            'notes' => 'nullable|max:255|string'
        ];
    }
}
