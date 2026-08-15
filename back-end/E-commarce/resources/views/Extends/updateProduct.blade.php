@extends('Admin.dashboard')

@section('title')
    تعديل المنتج 
@endsection

@section('page-title')
تعديل المنتج
@endsection

@section('page-subtitle')
التعديل علي تفاصيل المنتج
@endsection

@section('edit_product')

<div class="mt-6 rounded-2xl border border-line bg-white shadow-soft">

    <div class="flex flex-wrap items-center justify-between gap-3 border-b border-line px-5 py-4 sm:px-6">

        <div>
            <h2 class="text-[15.5px] font-extrabold">
                تعديل المنتج
            </h2>

            <p class="mt-0.5 text-[12px] text-muted">
                تعديل بيانات المنتج: {{ $product->name }}
            </p>
        </div>

        <span class="rounded-full bg-amber-50 px-3 py-1 text-[11px] font-extrabold text-amber-700">
            تعديل المنتج
        </span>

    </div>


    <div class="p-5 sm:p-6">

        <form
            method="POST"
            enctype="multipart/form-data"
            action="">
            @csrf
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">


                <div class="md:col-span-2">

                    <label
                        for="p_name"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        اسم المنتج

                    </label>

                    <input
                        id="p_name"
                        name="name"
                        type="text"
                        value="{{ old('name', $product->name) }}"
                        placeholder="أضف اسم المنتج"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                    @error('name')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div class="md:col-span-2">

                    <label
                        for="p_desc"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        الوصف

                    </label>

                    <textarea
                        id="p_desc"
                        name="description"
                        rows="4"
                        placeholder="اكتب وصفًا تفصيليًا للمنتج..."
                        class="w-full resize-y rounded-xl border border-line bg-cream/60 px-4 py-3 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">{{ old('description', $product->description) }}</textarea>

                    @error('description')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div>

                    <label
                        for="p_brand"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        الماركة

                    </label>

                    <input
                        id="p_brand"
                        name="brand"
                        type="text"
                        value="{{ old('brand', $product->brand) }}"
                        placeholder="اسم الماركة"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                    @error('brand')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div>

                    <label
                        for="p_price"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        السعر (EGP)

                    </label>

                    <input
                        id="p_price"
                        name="price"
                        type="number"
                        step="0.01"
                        value="{{ old('price', $product->price) }}"
                        placeholder="0.00"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                    @error('price')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div>

                    <label
                        for="p_sale_price"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        سعر الخصم

                    </label>

                    <input
                        id="p_sale_price"
                        name="sale_price"
                        type="number"
                        step="0.01"
                        value="{{ old('sale_price', $product->sale_price) }}"
                        placeholder="0.00"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                    @error('sale_price')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div>

                    <label
                        for="p_stock"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        الكمية المتوفرة

                    </label>

                    <input
                        id="p_stock"
                        name="stock"
                        type="number"
                        value="{{ old('stock', $product->stock) }}"
                        placeholder="0"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                    @error('stock')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div>

                    <label
                        for="p_sku"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        رمز المنتج

                    </label>

                    <input
                        id="p_sku"
                        name="sku"
                        type="text"
                        value="{{ old('sku', $product->sku) }}"
                        placeholder="DWN-00123"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                    @error('sku')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div class="md:col-span-2">

                    <label class="mb-2 block text-[12.5px] font-bold text-navy">
                        صورة المنتج
                    </label>


                    @if ($product->image)

                        <div class="mb-4">

                            <p class="mb-2 text-[12px] font-bold text-navy">
                                الصورة الحالية
                            </p>

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="h-32 w-32 rounded-xl border border-line object-cover">

                        </div>

                    @endif


                    <div
                        class="rounded-2xl border-2 border-dashed border-line bg-cream/60 px-6 py-8 text-center transition hover:border-gold hover:bg-gold-soft/40">

                        <svg
                            class="mx-auto mb-2.5 h-8 w-8 text-muted"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.6">

                            <path d="M12 16V4M6 10l6-6 6 6" />

                            <path d="M4 16v3a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-3" />

                        </svg>

                        <b class="block text-[13px]">
                            اختر صورة جديدة
                        </b>

                        <input
                            type="file"
                            name="image"
                            class="mt-3">

                        <span class="block mt-2 text-[11.5px] text-muted">
                            اتركها فارغة للاحتفاظ بالصورة الحالية
                        </span>

                    </div>


                    @error('image')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div>

                    <label
                        for="p_featured"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        منتج مميز؟

                    </label>

                    <select
                        id="p_featured"
                        name="is_featured"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                        <option
                            value="0"
                            {{ old('is_featured', $product->is_featured) == 0 ? 'selected' : '' }}>
                            لا
                        </option>

                        <option
                            value="1"
                            {{ old('is_featured', $product->is_featured) == 1 ? 'selected' : '' }}>
                            نعم
                        </option>

                    </select>

                    @error('is_featured')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <div>

                    <label
                        for="p_status"
                        class="mb-2 block text-[12.5px] font-bold text-navy">

                        حالة المنتج

                    </label>

                    <select
                        id="p_status"
                        name="status"
                        class="h-11 w-full rounded-xl border border-line bg-cream/60 px-4 text-[13px] outline-none transition focus:border-gold focus:bg-white focus:ring-4 focus:ring-gold-soft">

                        <option
                            value="published"
                            {{ old('status', $product->status) == 'published' ? 'selected' : '' }}>
                            منشور
                        </option>

                        <option
                            value="draft"
                            {{ old('status', $product->status) == 'draft' ? 'selected' : '' }}>
                            مسودة
                        </option>

                        <option
                            value="hidden"
                            {{ old('status', $product->status) == 'hidden' ? 'selected' : '' }}>
                            مخفي
                        </option>

                    </select>

                    @error('status')
                        <p class="mt-1 text-xs font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

            </div>


            <div class="mt-6 flex flex-wrap items-center gap-3 border-t border-line pt-5">

                <button
                    type="submit"
                    class="inline-flex items-center gap-2 rounded-xl bg-gold px-6 py-2.5 text-[13.5px] font-extrabold text-navy shadow-soft transition hover:bg-green-600 hover:text-white">

                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />

                    </svg>

                    حفظ التعديلات

                </button>


                <a
                    href="{{ route('show_products') }}"
                    class="inline-flex items-center gap-2 rounded-xl border border-line bg-white px-6 py-2.5 text-[13.5px] font-extrabold text-navy transition hover:border-navy">

                    إلغاء

                </a>

            </div>

        </form>

    </div>

</div>

@endsection