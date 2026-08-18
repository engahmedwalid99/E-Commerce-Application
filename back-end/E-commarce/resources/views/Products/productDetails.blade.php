<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>تفاصيل المنتج | {{ $product->name }}</title>
    <style>
        
        * {
            font-family: 'Cairo', sans-serif !important;
        }

        #btn_add{
            position: relative;
            overflow: hidden;
            font-family: 'Cairo', sans-serif;
            isolation: isolate;
        }

        #btn_add::before {
            content: "";
            position: absolute;

            width: 0%;
            height: 100%;

            top: 0;
            left: 0;

            transition: width 0.4s ease;

            z-index: -1;
        }

        #btn_add::before {
            background-color: rgba(0, 0, 0, 0.3);
        }

        #btn_add:hover::before{
            width: 100%;
        }
    </style>
</head>

<body>

    <x-navbar />

    <div class="min-h-screen bg-[#f8f6f0] p-6">

        <div class="mb-6 flex items-center justify-between">

            <div>
                <h1 class="text-2xl font-bold text-[#172033]">
                    تفاصيل المنتج
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    عرض جميع معلومات المنتج
                </p>
            </div>

            <a href="{{ route('all_products') }}"
                class="rounded-xl border border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                ← العودة للمنتجات
            </a>

        </div>


        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

            <div class="grid grid-cols-1 lg:grid-cols-2">


                <div class="flex min-h-[450px] items-center justify-center bg-[#f7f5ef] p-8">

                    @if ($product->image)
                        <img src="{{ asset('storage/' . $item->image) }} alt="{{ $product->name }}">
                    @else
                        <div class="flex h-80 w-80 items-center justify-center rounded-2xl bg-gray-100 text-gray-400">
                            لا توجد صورة
                        </div>
                    @endif
                </div>
                <div class="p-8">
                    <div class="mb-6">
                        <div class="mb-3 flex items-center gap-2">
                            @if ($product->status === 'published')
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-bold text-green-700">
                                    منشور
                                </span>
                            @elseif ($product->status === 'draft')
                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-bold text-yellow-700">
                                    مسودة
                                </span>
                            @else
                                <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-700">
                                    مخفي
                                </span>
                            @endif
                            @if ($product->is_featured)
                                <span class="rounded-full bg-purple-100 px-3 py-1 text-xs font-bold text-purple-700">
                                    ⭐ مميز
                                </span>
                            @endif
                        </div>
                        <h2 class="text-3xl font-bold text-[#172033]">
                            {{ $product->name }}
                        </h2>
                    </div>
                    <div class="mb-6">
                        <h3 class="mb-2 text-sm font-bold text-gray-500">
                            الوصف
                        </h3>
                        <p class="leading-7 text-gray-700">
                            {{ $product->description }}
                        </p>
                    </div>
                    <div class="mb-6 rounded-xl bg-[#faf8f2] p-5">
                        <h3 class="mb-3 text-sm font-bold text-gray-500">
                            السعر
                        </h3>
                        <div class="flex items-center gap-4">
                            <span class="text-3xl font-bold text-[#b08a35]">
                                {{ number_format($product->sale_price ?? $product->sale_price, 2) }}
                            </span>

                            @if ($product->sale_price && $product->sale_price < $product->price)
                                <span class="text-lg text-gray-400 line-through">
                                    {{ number_format($product->price, 2) }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="rounded-xl border border-gray-100 p-4">
                            <p class="text-xs font-semibold text-gray-400">
                                البراند
                            </p>
                            <p class="mt-1 font-bold text-gray-800">
                                {{ $product->brand }}
                            </p>
                        </div>
                        <div class="rounded-xl border border-gray-100 p-4">
                            <p class="text-xs font-semibold text-gray-400">
                                SKU
                            </p>
                            <p class="mt-1 font-bold text-gray-800">
                                {{ $product->sku }}
                            </p>
                        </div>
                        <div class="rounded-xl border border-gray-100 p-4">
                            <p class="text-xs font-semibold text-gray-400">
                                المخزون
                            </p>
                            <p class="mt-1 font-bold text-gray-800">
                                {{ $product->stock }}
                            </p>
                        </div>
                        <div class="rounded-xl border border-gray-100 p-4">
                            <p class="text-xs font-semibold text-gray-400">
                                الفئة
                            </p>
                            <p class="mt-1 font-bold text-gray-800">
                                {{ $product->category_id }}
                            </p>
                        </div>
                    </div>
                    <br>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" id="btn_add"
                            class="rounded-l bg-blue-700 text-center px-6 py-3 text-sm font-bold text-white transition hover:opacity-90 w-full">
                            أضف الي السله
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-200 p-8">
                <h3 class="mb-5 text-lg font-bold text-[#172033]">
                    معلومات إضافية
                </h3>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                    <div class="rounded-xl bg-gray-50 p-5">
                        <p class="text-xs text-gray-400">
                            رقم المنتج
                        </p>
                        <p class="mt-2 font-bold text-gray-800">
                            #{{ $product->id }}
                        </p>
                    </div>
                    <div class="rounded-xl bg-gray-50 p-5">
                        <p class="text-xs text-gray-400">
                            تاريخ الإضافة
                        </p>
                        <p class="mt-2 font-bold text-gray-800">
                            {{ $product->created_at?->format('Y-m-d H:i') }}
                        </p>
                    </div>
                    <div class="rounded-xl bg-gray-50 p-5">
                        <p class="text-xs text-gray-400">
                            آخر تحديث
                        </p>
                        <p class="mt-2 font-bold text-gray-800">
                            {{ $product->updated_at?->format('Y-m-d H:i') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</body>

</html>
