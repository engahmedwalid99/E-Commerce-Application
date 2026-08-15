<?php

namespace App\Http\Requests\profile;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class updateProfileDataRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'phone' => ['nullable', 'string', 'max:255','regex:/^01[0125][0-9]{8}$/','unique:users,phone,' . auth()->id()],
            'city' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages(){
        return [
            'name.required' => 'اسم المستخدم مطلوب.',
            'name.string'   => 'اسم المستخدم يجب أن يكون نصًا.',
            'name.max'      => 'اسم المستخدم يجب أن لا يزيد عن 255 حرفًا.',

            'email.unique' => 'البريد الإلكتروني مستخدم بالفعل.',
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.string'   => 'البريد الإلكتروني يجب أن يكون نصًا.',
            'email.email'    => 'البريد الإلكتروني غير صحيح.',
            'email.max'      => 'البريد الإلكتروني يجب أن لا يزيد عن 255 حرفًا.',

            'phone.string'   => 'رقم الهاتف يجب أن يكون نصًا.',
            'phone.max'      => 'رقم الهاتف يجب أن لا يزيد عن 255 حرفًا.',
            'phone.regex'    => 'رقم الهاتف يجب أن يكون بصيغة صحيحة.',
            'phone.unique' => 'رقم الهاتف مستخدم بالفعل.',
            
            'city.string'    => 'المدينة يجب أن تكون نصًا.',
            'city.max'       => 'المدينة يجب أن لا تزيد عن 255 حرفًا.',
        ];
    }
}
