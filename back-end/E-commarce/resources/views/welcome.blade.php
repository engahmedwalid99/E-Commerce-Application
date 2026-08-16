<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | متجرك المفضل للتسوق أونلاين</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700;800;900&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="data:image/png;base64,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">
    <link rel="icon" type="image/png" sizes="16x16" href="data:image/png;base64,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">
    <link rel="apple-touch-icon" sizes="180x180" href="data:image/png;base64,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">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#12162B',
                        navy2: '#1B2140',
                        gold: '#D4AF37',
                        cream: '#FAFAF8',
                        ink: '#12162B',
                        muted: '#767B8C',
                        line: '#E7E5E0',
                        danger: '#D64545',
                        ok: '#1E7A38',
                    },
                    fontFamily: {
                        cairo: ['Cairo', 'sans-serif'],
                        tajawal: ['Tajawal', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        .diamonds-bg {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cg fill='none' stroke='%23D4AF37' stroke-width='0.6' opacity='0.15'%3E%3Cpath d='M60 0 L90 30 L60 60 L30 30 Z'/%3E%3Cpath d='M60 60 L90 90 L60 120 L30 90 Z'/%3E%3Cpath d='M0 60 L30 30 L60 60 L30 90 Z'/%3E%3Cpath d='M60 60 L90 30 L120 60 L90 90 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 120px 120px;
        }
    </style>
</head>

<body class="m-0 font-cairo bg-cream text-ink">

    <x-navbar />

    <section class="relative overflow-hidden text-white bg-[radial-gradient(circle_at_75%_20%,#1B2140,#12162B_65%)]" style="height: 90vh">
        <div class="absolute inset-0 diamonds-bg"></div>
        <div class="container relative z-10 mx-auto max-w-[1240px] px-4 sm:px-6 py-16 sm:py-20 md:py-24">
            <div class="flex flex-col items-center text-center gap-5 max-w-2xl mx-auto">
                <span class="inline-flex items-center gap-2 text-xs sm:text-[13px] text-gold bg-gold/15 border border-gold/35 px-4 py-1.5 rounded-full">
                    ✦ اختار اللي يناسبك
                </span>

                <h1 class="font-extrabold leading-[1.3] text-3xl sm:text-4xl md:text-5xl">
                    كل اللي محتاجه <br>
                    <span class="text-gold mt-3">في مكان واحد</span>
                </h1>

                <p class="text-sm sm:text-base leading-relaxed text-[#C7CADA] max-w-md">
                    تصفّح مجموعة متنوعة من المنتجات، قارن الأسعار،
                    واختار اللي يناسبك بكل سهولة.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto justify-center">
                    <a href="{{ route('all_products') }}"
                        class="inline-flex items-center justify-center gap-2 bg-gold text-navy px-7 py-3.5 rounded-xl font-extrabold text-sm transition-transform hover:-translate-y-0.5 hover:shadow-[0_10px_24px_rgba(212,175,55,.28)]">
                        تصفح المنتجات
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M5 12h14" />
                            <path d="m13 6 6 6-6 6" />
                        </svg>
                    </a>

                    <a href="#"
                        class="inline-flex items-center justify-center border-[1.5px] border-white/30 text-white px-7 py-3.5 rounded-xl font-bold text-sm hover:border-white transition-colors">
                        العروض
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white border-b border-line">
        <div class="container mx-auto max-w-[1240px] px-4 sm:px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6 py-6">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 shrink-0 rounded-[11px] bg-gold/15 text-gold flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 3h13v13H3zM16 8h5l3 4v4h-8V8Z" />
                        <circle cx="6.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </div>
                <div><b class="block text-sm">شحن سريع</b><span class="text-xs text-muted">خلال 2-4 أيام عمل</span></div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 shrink-0 rounded-[11px] bg-gold/15 text-gold flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                    </svg>
                </div>
                <div><b class="block text-sm">دفع آمن 100%</b><span class="text-xs text-muted">حماية كاملة لبياناتك</span></div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 shrink-0 rounded-[11px] bg-gold/15 text-gold flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 12a9 9 0 1 0 9-9" />
                        <path d="M3 4v8h8" />
                    </svg>
                </div>
                <div><b class="block text-sm">إرجاع سهل</b><span class="text-xs text-muted">خلال 14 يوم من الاستلام</span></div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 shrink-0 rounded-[11px] bg-gold/15 text-gold flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M21 11.5a8.4 8.4 0 0 1-8.4 8.4 8.5 8.5 0 0 1-4.1-1L3 20l1.1-5.5A8.4 8.4 0 1 1 21 11.5Z" />
                    </svg>
                </div>
                <div><b class="block text-sm">دعم على مدار الساعة</b><span class="text-xs text-muted">نحن هنا لمساعدتك</span></div>
            </div>
        </div>
    </div>

    <section class="container mx-auto max-w-[1240px] px-4 sm:px-6 py-12 sm:py-16">
        <div class="flex items-end justify-between gap-4 mb-7">
            <div>
                <span class="block text-gold font-bold text-xs mb-2">تصفح حسب الفئة</span>
                <h2 class="text-2xl sm:text-[28px] font-extrabold">تسوّق حسب اهتمامك</h2>
            </div>
            <a href="{{ route('all_products') }}"
                class="font-bold text-xs sm:text-[13.5px] text-navy border-b-[1.5px] border-gold pb-0.5 whitespace-nowrap">عرض كل الفئات ←</a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
            <a href="#" class="bg-white border border-line rounded-2xl px-3 py-5 text-center transition-all hover:-translate-y-1 hover:shadow-[0_14px_28px_rgba(18,22,43,.08)] hover:border-gold">
                <div class="w-12 h-12 sm:w-[52px] sm:h-[52px] rounded-full flex items-center justify-center mx-auto mb-3 bg-[#EFEAF9]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24" fill="none" stroke="#7C5CD6" stroke-width="1.8">
                        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                        <path d="M3 6h18M16 10a4 4 0 0 1-8 0" />
                    </svg>
                </div>
                <b class="block text-xs sm:text-[13.5px]">الأزياء</b>
            </a>
            <a href="#" class="bg-white border border-line rounded-2xl px-3 py-5 text-center transition-all hover:-translate-y-1 hover:shadow-[0_14px_28px_rgba(18,22,43,.08)] hover:border-gold">
                <div class="w-12 h-12 sm:w-[52px] sm:h-[52px] rounded-full flex items-center justify-center mx-auto mb-3 bg-[#E7F2F9]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24" fill="none" stroke="#2C8AC2" stroke-width="1.8">
                        <rect x="4" y="2" width="16" height="20" rx="2" />
                        <path d="M9 18h6" />
                    </svg>
                </div>
                <b class="block text-xs sm:text-[13.5px]">الإلكترونيات</b>
            </a>
            <a href="#" class="bg-white border border-line rounded-2xl px-3 py-5 text-center transition-all hover:-translate-y-1 hover:shadow-[0_14px_28px_rgba(18,22,43,.08)] hover:border-gold">
                <div class="w-12 h-12 sm:w-[52px] sm:h-[52px] rounded-full flex items-center justify-center mx-auto mb-3 bg-[#FBEFEA]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24" fill="none" stroke="#D06B3D" stroke-width="1.8">
                        <path d="M3 9h18M3 15h18" />
                        <rect x="3" y="4" width="18" height="16" rx="2" />
                    </svg>
                </div>
                <b class="block text-xs sm:text-[13.5px]">المنزل والمطبخ</b>
            </a>
            <a href="#" class="bg-white border border-line rounded-2xl px-3 py-5 text-center transition-all hover:-translate-y-1 hover:shadow-[0_14px_28px_rgba(18,22,43,.08)] hover:border-gold">
                <div class="w-12 h-12 sm:w-[52px] sm:h-[52px] rounded-full flex items-center justify-center mx-auto mb-3 bg-[#EAF7EE]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24" fill="none" stroke="#2E9E52" stroke-width="1.8">
                        <circle cx="12" cy="8" r="5" />
                        <path d="M6 21v-4a6 6 0 0 1 12 0v4" />
                    </svg>
                </div>
                <b class="block text-xs sm:text-[13.5px]">الجمال والعناية</b>
            </a>
            <a href="#" class="bg-white border border-line rounded-2xl px-3 py-5 text-center transition-all hover:-translate-y-1 hover:shadow-[0_14px_28px_rgba(18,22,43,.08)] hover:border-gold">
                <div class="w-12 h-12 sm:w-[52px] sm:h-[52px] rounded-full flex items-center justify-center mx-auto mb-3 bg-[#FBEFF4]">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24" fill="none" stroke="#C24E80" stroke-width="1.8">
                        <path d="M12 22s8-4.5 8-11.8C20 5.6 16.4 2 12 2S4 5.6 4 10.2C4 17.5 12 22 12 22Z" />
                    </svg>
                </div>
                <b class="block text-xs sm:text-[13.5px]">الرياضة</b>
            </a>
            <a href="#" class="bg-white border border-line rounded-2xl px-3 py-5 text-center transition-all hover:-translate-y-1 hover:shadow-[0_14px_28px_rgba(18,22,43,.08)] hover:border-gold">
                <div class="w-12 h-12 sm:w-[52px] sm:h-[52px] rounded-full flex items-center justify-center mx-auto mb-3 bg-gold/15">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" viewBox="0 0 24 24" fill="none" stroke="#B8912B" stroke-width="1.8">
                        <rect x="3" y="7" width="18" height="13" rx="2" />
                        <path d="M8 7V5a4 4 0 0 1 8 0v2" />
                    </svg>
                </div>
                <b class="block text-xs sm:text-[13.5px]">حقائب وإكسسوارات</b>
            </a>
        </div>
    </section>

    <section class="container mx-auto max-w-[1240px] px-4 sm:px-6 pb-12 sm:pb-16">
        <div class="flex items-end justify-between gap-4 mb-7">
            <div>
                <span class="block text-gold font-bold text-xs mb-2">مختارات هذا الأسبوع</span>
                <h2 class="text-2xl sm:text-[28px] font-extrabold">منتجات مميزة</h2>
            </div>
            <a href="{{ route('all_products') }}"
                class="font-bold text-xs sm:text-[13.5px] text-navy border-b-[1.5px] border-gold pb-0.5 whitespace-nowrap">عرض الكل ←</a>
        </div>

        <div class="inline-flex gap-2 mb-6 bg-[#F1F0EB] p-1.5 rounded-full w-fit">
            <div class="px-4 sm:px-5 py-2 rounded-full text-xs sm:text-[13.5px] font-bold bg-navy text-white">الأكثر مبيعًا</div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            @foreach ($products as $item)
                <div class="bg-white border border-line rounded-2xl overflow-hidden transition-all hover:shadow-[0_18px_36px_rgba(18,22,43,.1)] hover:-translate-y-1">
                    <a href="{{ route('product_details', $item->id) }}">
                        <div class="relative aspect-square flex items-center justify-center bg-[#F3ECDD]">
                            @if ($item->sale_price && $item->sale_price < $item->price)
                                <span class="absolute top-3 right-3 bg-danger text-white text-[10px] sm:text-[11px] font-bold px-2.5 py-1 rounded-full">
                                    خصم
                                    {{ round((($item->price - $item->sale_price) / $item->price) * 100) }}%
                                </span>
                            @endif
                            @if ($item->image)
                                <div class="overflow-hidden w-full h-full">
                                    <img class="w-full h-full object-cover" src="{{ $item->image }}" alt="{{ $item->name }}">
                                </div>
                            @else
                                <svg class="w-12 h-12 sm:w-14 sm:h-14 opacity-55" viewBox="0 0 24 24" fill="none" stroke="#B8912B" stroke-width="1.4">
                                    <rect x="3" y="8" width="18" height="12" rx="2" />
                                    <path d="M8 8V6a4 4 0 0 1 8 0v2" />
                                </svg>
                            @endif
                        </div>
                        <div class="px-3 sm:px-4 pt-3 sm:pt-4 pb-4">
                            <div class="text-[11px] sm:text-[11.5px] text-muted mb-1">{{ $item->category_id }}</div>
                            <div class="text-sm sm:text-[14.5px] font-bold leading-relaxed mb-2 line-clamp-2">{{ $item->name }}</div>
                            <hr class="border-line my-2">
                            <div class="flex items-center justify-between gap-2">
                                <span class="text-base sm:text-[16.5px] font-bold text-[#b08a35]">
                                    {{ number_format($item->sale_price ?? $item->price, 2) }}
                                </span>
                                <form action="{{ route('cart.add', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-9 h-9 sm:w-[38px] sm:h-[38px] rounded-[10px] bg-navy text-white flex items-center justify-center cursor-pointer transition-colors hover:bg-gold hover:text-navy">
                                        <svg class="w-4 h-4 sm:w-[17px] sm:h-[17px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container mx-auto max-w-[1240px] px-4 sm:px-6 pb-12 sm:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
            <div class="relative overflow-hidden rounded-[22px] p-8 sm:p-10 min-h-[200px] sm:min-h-[220px] flex flex-col justify-center bg-gradient-to-br from-navy2 to-navy text-white">
                <div class="absolute -left-8 -bottom-8 w-40 h-40 rounded-full bg-gold/10"></div>
                <div class="relative z-10">
                    <span class="block opacity-85 text-xs font-bold mb-2.5">عرض الإلكترونيات</span>
                    <h3 class="text-xl sm:text-[26px] font-extrabold mb-2.5">خصم يصل إلى 30% على الأجهزة الذكية</h3>
                    <p class="text-sm opacity-85 mb-5 max-w-[280px]">ساعات ذكية، سماعات، وإكسسوارات تقنية بأسعار لا تُفوّت.</p>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-[22px] p-8 sm:p-10 min-h-[200px] sm:min-h-[220px] flex flex-col justify-center bg-gradient-to-br from-[#F3E7C9] to-[#EAD9A0] text-navy">
                <div class="absolute -left-8 -bottom-8 w-40 h-40 rounded-full bg-navy/[.06]"></div>
                <div class="relative z-10">
                    <span class="block opacity-85 text-xs font-bold mb-2.5">مجموعة جديدة</span>
                    <h3 class="text-xl sm:text-[26px] font-extrabold mb-2.5">تشكيلة الأزياء لموسم الخريف</h3>
                    <p class="text-sm opacity-85 mb-5 max-w-[280px]">قطع مختارة بعناية تناسب كل الأذواق والمناسبات.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto max-w-[1240px] px-4 sm:px-6">
        <div class="bg-gradient-to-br from-[#F3E7C9] to-[#EAD9A0] rounded-3xl px-6 sm:px-12 py-10 sm:py-12 text-center my-6">
            <h3 class="text-xl sm:text-2xl font-extrabold text-navy mb-2">لا تفوّت عروضنا القادمة</h3>
            <p class="text-sm text-[#5B4E22] mb-6">اشترك في نشرتنا البريدية واحصل على خصم 10% على طلبك الأول</p>
            <form class="flex flex-col sm:flex-row gap-2.5 max-w-md mx-auto" action="{{ route('subscribe') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="بريدك الإلكتروني"
                    class="flex-1 px-4 py-3 rounded-full border-[1.5px] border-navy/15 outline-none font-cairo text-sm focus:border-navy">
                <button type="submit"
                    class="bg-navy text-white px-6 py-3 rounded-full font-bold text-sm cursor-pointer whitespace-nowrap">اشتراك</button>
            </form>
            <div class="mt-3 text-center">
                @error('email')
                    <span class="text-red-500 font-bold">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </section>

    <x-footer />

</body>

</html>
