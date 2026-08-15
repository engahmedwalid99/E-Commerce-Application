<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                'max:255',
            ],

            'description' => [
                'required',
                'string',
                'min:5',
                'max:255',
            ],

            'brand' => [
                'nullable',
                'string',
                'max:255',
            ],

            'price' => [
                'required',
                'numeric',
                'min:0',
            ],

            'sale_price' => [
                'nullable',
                'numeric',
                'min:0',
                'lte:price',
            ],

            'stock' => [
                'required',
                'integer',
                'min:0',
            ],

            'sku' => 'required|string|max:100|unique:products,sku,' . $this->route('id'),

            'status' => [
                'required',
                'in:published,draft,hidden',
            ],

            'is_featured' => [
                'required',
                'boolean',
            ],

            'category_id' => [
                'required',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png',
                'max:5120',
            ],
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'اسم المنتج مطلوب.',
            'name.string' => 'اسم المنتج يجب أن يكون نصًا.',
            'name.max' => 'اسم المنتج يجب ألا يزيد عن 255 حرفًا.',

            'description.required' => 'وصف المنتج مطلوب.',
            'description.string' => 'وصف المنتج يجب أن يكون نصًا.',
            'description.min' => 'وصف المنتج يجب أن يحتوي على 5 أحرف على الأقل.',
            'description.max' => 'وصف المنتج يجب ألا يزيد عن 255 حرفًا.',

            'brand.string' => 'اسم الماركة يجب أن يكون نصًا.',
            'brand.max' => 'اسم الماركة يجب ألا يزيد عن 255 حرفًا.',

            'price.required' => 'سعر المنتج مطلوب.',
            'price.numeric' => 'سعر المنتج يجب أن يكون رقمًا.',
            'price.min' => 'سعر المنتج لا يمكن أن يكون أقل من 0.',

            'sale_price.numeric' => 'سعر الخصم يجب أن يكون رقمًا.',
            'sale_price.min' => 'سعر الخصم لا يمكن أن يكون أقل من 0.',
            'sale_price.lte' => 'سعر الخصم يجب ألا يكون أكبر من السعر الأصلي.',

            'stock.required' => 'الكمية المتوفرة مطلوبة.',
            'stock.integer' => 'الكمية المتوفرة يجب أن تكون رقمًا صحيحًا.',
            'stock.min' => 'الكمية المتوفرة لا يمكن أن تكون أقل من 0.',

            'sku.required' => 'رمز المنتج (SKU) مطلوب.',
            'sku.string' => 'رمز المنتج يجب أن يكون نصًا.',
            'sku.max' => 'رمز المنتج يجب ألا يزيد عن 100 حرف.',
            'sku.unique' => 'رمز المنتج هذا مستخدم بالفعل، اختر رمزًا آخر.',
            
            'status.required' => 'حالة المنتج مطلوبة.',
            'status.in' => 'حالة المنتج غير صحيحة.',

            'is_featured.required' => 'يجب تحديد ما إذا كان المنتج مميزًا.',
            'is_featured.boolean' => 'قيمة المنتج المميز غير صحيحة.',

            'category_id.required' => 'يجب أختيار نوع المنتج.',

            'image.image' => 'الملف المرفوع يجب أن يكون صورة.',
            'image.mimes' => 'الصورة يجب أن تكون بصيغة JPG أو JPEG أو PNG.',
            'image.max' => 'حجم الصورة يجب ألا يتجاوز 5 ميجابايت.',
        ];
    }
}