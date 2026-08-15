<?php

namespace App\Http\Requests\profile;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class updatePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'old_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'same:new_password'],
        ];
    }

    public function messages(){
        return [
            'old_password.required' => 'كلمة المرور الحالية مطلوبة',
            'old_password.string' => 'كلمة المرور الحالية يجب أن تكون نصًا',
            'old_password.min' => 'كلمة المرور الحالية يجب أن تكون على الأقل 8 أحرف',
            'new_password.required' => 'كلمة المرور الجديدة مطلوبة',
            'new_password.string' => 'كلمة المرور الجديدة يجب أن تكون نصًا',
            'new_password.min' => 'كلمة المرور الجديدة يجب أن تكون على الأقل 8 أحرف',
            'password_confirmation.same' => 'تأكيد كلمة المرور غير متطابق',
            'password_confirmation.required' => 'تأكيد كلمة المرور مطلوب',
        ];
    }
}
