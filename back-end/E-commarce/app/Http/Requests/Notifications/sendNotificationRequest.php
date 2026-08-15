<?php

namespace App\Http\Requests\Notifications;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class sendNotificationRequest extends FormRequest
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
                'min:5'
            ],
            'description' => [
                'required',
                'string',
                'min:10',
                'max:255'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'اسم الإشعار مطلوب.',
            'name.string'   => 'اسم الإشعار يجب أن يكون نصًا.',
            'name.min'      => 'اسم الإشعار يجب ألا يقل عن 5 أحرف.',

            'description.required' => 'وصف الإشعار مطلوب.',
            'description.string'   => 'وصف الإشعار يجب أن يكون نصًا.',
            'description.min'      => 'وصف الإشعار يجب ألا يقل عن 10 أحرف.',
            'description.max'      => 'وصف الإشعار يجب ألا يزيد عن 255 حرفًا.',
        ];
    }
}