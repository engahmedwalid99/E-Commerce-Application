<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتجات | {{ env('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        cairo: ['Cairo', 'sans-serif'],
                    },
                    keyframes: {
                        fadeUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(35px) scale(.96)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0) scale(1)'
                            },
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-7px)'
                            },
                        },
                        shine: {
                            '0%': {
                                transform: 'translateX(-120%)'
                            },
                            '100%': {
                                transform: 'translateX(120%)'
                            },
                        },
                        pulseSoft: {
                            '0%, 100%': {
                                opacity: '.6'
                            },
                            '50%': {
                                opacity: '1'
                            },
                        },
                    },
                    animation: {
                        fadeUp: 'fadeUp .7s cubic-bezier(.22,1,.36,1) both',
                        float: 'float 3s ease-in-out infinite',
                        shine: 'shine 1.4s ease-in-out',
                        pulseSoft: 'pulseSoft 2s ease-in-out infinite',
                    },
                },
            },
        };
    </script>
</head>

<body class="min-h-screen bg-[#faf8f2] font-cairo text-[#172033]">
    <x-navbar />
    <x-success />
    <section class="relative overflow-hidden">
        <div class="pointer-events-none absolute -right-32 -top-32 h-80 w-80 rounded-full bg-[#b8912b]/10 blur-3xl">
        </div>
        <div class="pointer-events-none absolute -left-32 top-20 h-80 w-80 rounded-full bg-[#172033]/5 blur-3xl">
        </div>
        <div class="relative mx-auto max-w-7xl px-6 pb-10 pt-14 lg:pt-20">
            <div class="max-w-3xl">
                <div class="mb-4 flex items-center gap-3">
                    <span class="h-[2px] w-10 bg-[#b8912b]"></span>
                    <p class="text-sm font-bold tracking-wide text-[#b8912b]">
                        {{ env('APP_NAME') }}
                    </p>
                </div>
                <h1 class="text-xl font-extrabold leading-tight text-[#172033] sm:text-xl lg:text-xl">
                    اكتشف
                    <span class="relative inline-block text-[#b8912b]">
                        أفضل المنتجات
                        <span class="absolute -bottom-1 right-0 h-1 w-full rounded-full bg-[#b8912b]/20"></span>
                    </span>
                </h1>
                <p class="mt-5 max-w-2xl text-sm leading-8 text-gray-500 sm:text-base">
                    اكتشف أحدث المنتجات والعروض المتاحة لدينا،
                    واختر ما يناسبك من مجموعة منتجاتنا المميزة.
                </p>
                @if ($products->count())
                    <div class="mt-8 flex flex-wrap gap-4">
                        <div
                            class="flex items-center gap-3 rounded-2xl border border-[#eee8da] bg-white px-5 py-3 shadow-sm">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#b8912b]/10 text-[#b8912b]">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <div class="flex items-center justify-center">
                                <p class="text-xs text-gray-400">
                                    إجمالي المنتجات:
                                </p>
                                <p class="text-lg font-extrabold mr-2 text-[#172033]">
                                    {{ $products->count() }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>


    <main class="mx-auto max-w-7xl px-6 pb-20">

        @if ($products->total() > 0)

            <div
                class="mb-8 flex flex-col gap-4 border-b border-[#eee8da] pb-5 sm:flex-row sm:items-center sm:justify-between">

                <div>
                    <h2 class="text-xl font-extrabold text-[#172033]">
                        نتائج البحث
                    </h2>

                    <p class="mt-1 text-xs text-gray-400">
                        المنتجات المطابقة لبحثك
                    </p>
                </div>

                <div
                    class="flex w-fit items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-semibold text-gray-500 shadow-sm ring-1 ring-[#eee8da]">

                    <span class="h-2 w-2 animate-pulseSoft rounded-full bg-[#b8912b]"></span>

                    {{ $products->total() }} منتج متاح

                </div>

            </div>


            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                @foreach ($products as $index => $item)
                    @php
                        $price = (float) $item->price;

                        $salePrice = $item->sale_price !== null ? (float) $item->sale_price : null;

                        $hasSale = $salePrice !== null && $price > 0 && $salePrice < $price;

                        $discount = $hasSale ? round((($price - $salePrice) / $price) * 100) : 0;

                        $displayPrice = $hasSale ? $salePrice : $price;
                    @endphp


                    <div class="group relative animate-fadeUp" style="animation-delay: {{ $index * 80 }}ms;">
                        <div
                            class="absolute -inset-1 rounded-[26px] bg-gradient-to-r from-[#b8912b]/20 via-transparent to-[#172033]/10 opacity-0 blur-xl transition duration-500 group-hover:opacity-100">
                        </div>

                        <div
                            class="relative overflow-hidden rounded-[24px] border border-[#eee8da] bg-white shadow-sm transition-all duration-500 ease-out group-hover:-translate-y-2">

                            <a href="{{ route('product_details', $item->id) }}" class="relative block">

                                <div
                                    class="relative flex h-[290px] items-center justify-center overflow-hidden bg-[#f3ecdd]">
                                    @if ($hasSale)
                                        <div
                                            class="absolute right-4 top-4 z-20 rounded-full bg-[#b8912b] px-3 py-1.5 text-xs font-bold text-white shadow-lg">

                                            خصم {{ $discount }}%

                                        </div>
                                    @endif

                                    @if ($item->image)
                                        <img src="{{ $item->image }}" alt="{{ $item->name }}" loading="lazy"
                                            class="relative z-10 h-full w-full object-contain p-6 transition duration-700 ease-out group-hover:scale-110">
                                    @else
                                        <div class="flex flex-col items-center gap-3 text-[#b8912b]">

                                            <div
                                                class="flex h-24 w-24 items-center justify-center rounded-3xl bg-white/60">

                                                <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.4">

                                                    <rect x="3" y="8" width="18" height="12" rx="2" />

                                                    <path d="M8 8V6a4 4 0 0 1 8 0v2" />

                                                </svg>

                                            </div>

                                            <span class="text-xs font-semibold">
                                                لا توجد صورة
                                            </span>

                                        </div>
                                    @endif

                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent opacity-0 transition duration-500 group-hover:opacity-100">
                                    </div>

                                </div>

                            </a>

                            <div class="p-5">

                                <div class="mb-2 flex items-center gap-2">

                                    <span class="h-1.5 w-1.5 rounded-full bg-[#b8912b]">
                                    </span>

                                    <span class="text-xs font-bold text-[#b8912b]">

                                        {{ $item->category_id }}

                                    </span>

                                </div>

                                <a href="{{ route('product_details', $item->id) }}">

                                    <h3
                                        class="min-h-[52px] text-base font-extrabold leading-7 text-[#172033] transition-colors duration-300 group-hover:text-[#b8912b]">

                                        {{ $item->name }}

                                    </h3>

                                </a>


                                <div class="my-4 h-px bg-[#eee8da]"></div>

                                <div class="flex items-end justify-between gap-3">

                                    <div>

                                        <p class="mb-1 text-[11px] text-gray-400">
                                            السعر
                                        </p>

                                        <div class="flex items-baseline gap-1">

                                            <span class="text-xl font-extrabold text-[#172033]">

                                                {{ number_format($displayPrice, 2) }}

                                            </span>

                                            <span class="text-[11px] font-semibold text-gray-400">

                                                EGP

                                            </span>

                                        </div>


                                        @if ($hasSale)
                                            <div class="mt-1 flex items-center gap-2">

                                                <span class="text-xs text-gray-400 line-through">

                                                    {{ number_format($price, 2) }}
                                                    EGP

                                                </span>

                                                <span class="text-[10px] font-bold text-green-600">

                                                    وفر {{ $discount }}%

                                                </span>

                                            </div>
                                        @endif

                                    </div>

                                    <form action="{{ route('cart.add', $item->id) }}" method="POST">

                                        @csrf

                                        <button type="submit" title="إضافة إلى السلة"
                                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#172033] text-white shadow-lg transition-all duration-300 hover:scale-105 hover:bg-[#b8912b] active:scale-95">

                                            <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">

                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 2h12m-9 4a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z" />

                                            </svg>

                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

            <div class="mt-12">
                {{ $products->links() }}
            </div>
        @else
            <div
                class="relative overflow-hidden rounded-[30px] border border-[#eee8da] bg-white px-6 py-24 text-center shadow-sm">

                <div
                    class="mx-auto flex h-24 w-24 items-center justify-center rounded-[28px] bg-[#faf7ef] text-[#b58b3a]">

                    <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5">

                        <path d="M6.5 8.5h11l1.1 11H5.4l1.1-11Z" />

                        <path d="M9 8.5V6.8a3 3 0 0 1 6 0v1.7" />

                        <path d="M9.5 12.5v.01" />

                        <path d="M14.5 12.5v.01" />

                    </svg>

                </div>

                <h2 class="mt-7 text-2xl font-extrabold text-[#172033]">
                    لا توجد منتجات
                </h2>

                <p class="mx-auto mt-3 max-w-sm text-sm leading-7 text-gray-500">
                    لم نجد أي منتجات مطابقة لبحثك.
                    جرّب البحث باستخدام اسم مختلف.
                </p>

            </div>

        @endif

    </main>
    <x-footer />
</body>

</html>
