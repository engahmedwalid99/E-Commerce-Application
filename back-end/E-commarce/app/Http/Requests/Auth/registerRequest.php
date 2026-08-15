<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'min:5',
            'max:30',
        ],

        'email' => [
            'required',
            'string',
            'email',
            'unique:users,email',
        ],

        'password' => [
            'required',
            'string',
            'min:8',
            'confirmed',
        ],

        'terms' => [
            'required',
            'accepted',
        ],

        'password_confirmation' => [
            'required',
            'string',
        ],

        'g-recaptcha-response' => [
            'required',
        ]
    ];
}

public function messages(): array
{
    return [
        'name.required' => 'اسم المستخدم مطلوب.',
        'name.string'   => 'اسم المستخدم يجب أن يكون نصًا.',
        'name.min'      => 'اسم المستخدم يجب أن يكون 5 أحرف على الأقل.',
        'name.max'      => 'اسم المستخدم يجب ألا يتجاوز 30 حرفًا.',

        'email.required' => 'البريد الإلكتروني مطلوب.',
        'email.string'   => 'البريد الإلكتروني يجب أن يكون نصًا.',
        'email.email'    => 'البريد الإلكتروني غير صحيح.',
        'email.unique'   => 'البريد الإلكتروني مستخدم بالفعل.',

        'password.required'  => 'كلمة المرور مطلوبة.',
        'password.string'    => 'كلمة المرور يجب أن تكون نصًا.',
        'password.min'       => 'كلمة المرور يجب أن تكون 8 أحرف على الأقل.',
        'password.confirmed' => 'تأكيد كلمة المرور غير متطابق.',

        'terms.required' => 'يجب الموافقة على الشروط والأحكام.',
        'terms.accepted' => 'يجب الموافقة على الشروط والأحكام.',

        'password_confirmation.required' => 'تأكيد كلمة المرور مطلوب.',
        'password_confirmation.string'   => 'تأكيد كلمة المرور يجب أن يكون نصًا.',

        'g-recaptcha-response.required' => 'يرجى تأكيد أنك لست روبوتًا.',
    ];
}
}
