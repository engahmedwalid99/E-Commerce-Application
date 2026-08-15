<?php

namespace App\Http\Requests\News;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class newsSubscribeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                'email',
                'unique:news,email',
            ],
        ];
    }

    public function messages(): array{
        return [
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.string'   => 'البريد الإلكتروني يجب أن يكون نصًا.',
            'email.email'    => 'البريد الإلكتروني غير صحيح.',
            'email.unique'   => 'البريد الإلكتروني مستخدم بالفعل.',
        ];
    }
}
