<?php

namespace App\Http\Requests\Orders;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class checkoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:100',
            ],

            'phone' => [
                'required',
                'string',
                'regex:/^(01)[0125][0-9]{8}$/',
            ],

            'address' => [
                'required',
                'string',
                'min:5',
                'max:500',
            ],

            'city' => [
                'required',
                'string',
                'max:100',
            ],

            'notes' => [
                'nullable',
                'string',
                'max:1000',
            ],
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'الاسم مطلوب.',
        'name.string'   => 'الاسم يجب أن يكون نصًا.',
        'name.min'      => 'الاسم يجب أن يحتوي على 3 أحرف على الأقل.',
        'name.max'      => 'الاسم يجب ألا يتجاوز 100 حرف.',

        'phone.required' => 'رقم الهاتف مطلوب.',
        'phone.string'   => 'رقم الهاتف يجب أن يكون نصًا.',
        'phone.regex'    => 'رقم الهاتف غير صحيح. يجب أن يكون رقم هاتف مصري صحيح.',

        'address.required' => 'العنوان مطلوب.',
        'address.string'   => 'العنوان يجب أن يكون نصًا.',
        'address.min'      => 'العنوان يجب أن يحتوي على 5 أحرف على الأقل.',
        'address.max'      => 'العنوان يجب ألا يتجاوز 500 حرفًا.',

        'city.required' => 'المدينة مطلوبة.',
        'city.string'   => 'المدينة يجب أن تكون نصًا.',
        'city.max'      => 'اسم المدينة يجب ألا يتجاوز 100 حرف.',

        'notes.string' => 'الملاحظات يجب أن تكون نصًا.',
        'notes.max'    => 'الملاحظات يجب ألا تتجاوز 1000 حرف.',
    ];
}
}
