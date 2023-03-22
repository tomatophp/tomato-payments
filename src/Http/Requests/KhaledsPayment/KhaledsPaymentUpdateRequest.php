<?php

namespace TomatoPHP\TomatoPayments\Http\Requests\KhaledsPayment;

use Illuminate\Foundation\Http\FormRequest;

class KhaledsPaymentUpdateRequest extends FormRequest
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
                        'model_id' => 'sometimes',
            'model_table' => 'sometimes|max:255|string',
            'order_id' => 'sometimes',
            'order_table' => 'sometimes|max:255|string',
            'payment_method' => 'sometimes|max:255|string',
            'payment_status' => 'sometimes|max:255|string',
            'transaction_code' => 'nullable|max:255|string',
            'amount' => 'sometimes',
            'notes' => 'nullable|max:255|string'
        ];
    }
}
