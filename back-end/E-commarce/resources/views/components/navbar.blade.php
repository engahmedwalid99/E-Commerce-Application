<header class="sticky top-0 z-50 w-full border-b border-gray-200/80 bg-white/95 shadow-sm backdrop-blur-xl"
    dir="rtl">
    <div class="mx-auto flex min-h-[74px] w-full max-w-[1500px] items-center gap-3 px-4 sm:px-6 lg:gap-5">
        <a href="{{ route('home') }}" class="group flex shrink-0 items-center gap-2.5">

            <svg class="h-11 w-11 group-hover:rotate-1" viewBox="0 0 64 64" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="diwanLogoGradient" x1="8" y1="8" x2="56" y2="56"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#111827" />
                        <stop offset="1" stop-color="#374151" />
                    </linearGradient>
                </defs>

                <rect x="3" y="3" width="58" height="58" rx="18" fill="url(#diwanLogoGradient)" />

                <path
                    d="M43 21.5C38 17.5 30.5 18 26 22C22.5 25 22 29.5 24.5 32.5C27 35.5 31.5 36 35 34C38 32.5 40 30 40 27.5C40 25 38 23 35.5 23C32.5 23 29.5 25 29.5 28C29.5 30 30.5 31 32 31C34 31 35.5 29.5 35.5 28"
                    stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />

                <circle cx="42" cy="20" r="2.2" fill="white" />

                <path d="M18 43.5H46" stroke="white" stroke-width="2.5" stroke-linecap="round" opacity=".7" />
            </svg>

            <div class="hidden leading-none sm:block">
                <span class="block text-xl font-black tracking-tight text-gray-900">
                    {{ env('APP_NAME') }}
                </span>

                <span class="mt-1 block text-[9px] font-medium tracking-wide text-gray-400">
                    متجرك المفضل
                </span>
            </div>

        </a>
        <nav class="mr-2 hidden items-center gap-1 lg:flex">

            <a href="{{ route('home') }}"
                class="group relative flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-bold text-gray-900 transition duration-200 hover:bg-gray-50">
                <svg class="h-4 w-4 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8">
                    <path d="m3 10 9-7 9 7" />
                    <path d="M5 9v11h14V9" />
                    <path d="M9 20v-6h6v6" />
                </svg>

                الرئيسية

                <span class="absolute bottom-1 left-1/2 h-0.5 w-5 -translate-x-1/2 rounded-full bg-gray-900"></span>
            </a>

            <a href="{{ route('all_products') }}"
                class="flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold text-gray-500 transition duration-200 hover:bg-gray-50 hover:text-gray-900">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="m3 7 3-3h12l3 3" />
                    <path d="M4 7h16v13H4z" />
                    <path d="M9 11h6" />
                </svg>

                المنتجات
            </a>

            <a href="#"
                class="flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold text-gray-500 transition duration-200 hover:bg-gray-50 hover:text-gray-900">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M20 12V8l-8-5-8 5v4" />
                    <path d="M4 12l8 5 8-5" />
                    <path d="M12 17v5" />
                </svg>

                العروض
            </a>

            <a href="{{ route('contact') }}"
                class="flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold text-gray-500 transition duration-200 hover:bg-gray-50 hover:text-gray-900">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path
                        d="M21 11.5a8.4 8.4 0 0 1-9 8.5 9.3 9.3 0 0 1-4.3-1.1L3 20l1.5-4.3A8.4 8.4 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5Z" />
                    <path d="M8 12h.01" />
                    <path d="M12 12h.01" />
                    <path d="M16 12h.01" />
                </svg>

                تواصل معنا
            </a>
        </nav>
        <div class="mr-auto max-w-md flex-1 xl:block">
            <form class="relative">
                <svg class="pointer-events-none absolute right-4 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-400"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="11" cy="11" r="7" />
                    <path d="m20 20-4-4" />
                </svg>
                <input type="search" placeholder="ابحث عن منتج..."
                    class="h-11 w-full rounded-2xl border border-gray-200 bg-gray-50/80 pr-12 pl-4 text-xs text-gray-700 outline-none transition duration-200 placeholder:text-gray-400 focus:border-gray-300 focus:bg-white focus:ring-4 focus:ring-gray-100">
            </form>
        </div>
        <div class="flex shrink-0 items-center gap-1 sm:gap-2">
            @auth
                <a href="{{ route('all_notification') }}">
                    <button
                        class="relative flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:bg-slate-50 hover:text-slate-900">

                        <span class="absolute right-2 top-2 h-2 w-2 rounded-full border-2 border-white bg-red-500">
                        </span>

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">

                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                            <path d="M10 21h4" />

                        </svg>

                    </button>
                </a>
                <a href="{{ route('cart') }}" aria-label="السلة"
                    class="group relative flex h-10 w-10 items-center justify-center rounded-xl text-gray-500 transition duration-200 hover:bg-gray-100 hover:text-gray-900">
                    <svg class="h-[21px] w-[21px] transition duration-200 group-hover:scale-110" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6" />
                    </svg>
                    <span
                        class="absolute right-0.5 top-0.5 flex min-h-[17px] min-w-[17px] items-center justify-center rounded-full bg-gray-900 px-1 text-[8px] font-bold text-white">
                        @php
                            $cart = session()->get('cart', []);
                        @endphp
                        {{ count($cart) ?? 0 }}
                    </span>
                </a>
                <div class="group relative hidden sm:block">
                    <button type="button"
                        class="flex h-11 items-center gap-2 rounded-2xl border border-gray-200 bg-white px-2.5 transition duration-200 hover:border-gray-300 hover:bg-gray-50">
                        <span
                            class="flex h-8 w-8 items-center justify-center rounded-xl bg-gradient-to-br from-gray-900 to-gray-700 text-xs font-bold text-white shadow-sm">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </span>
                        <span class="hidden max-w-[100px] flex-col text-right md:flex">
                            <span class="text-[9px] text-gray-400">
                                مرحباً بك
                            </span>
                            <strong class="truncate text-xs font-bold text-gray-800">
                                {{ Auth::user()->name }}
                            </strong>
                        </span>

                        <svg class="h-4 w-4 text-gray-400 transition duration-300 group-hover:rotate-180"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="m6 9 6 6 6-6" />
                        </svg>

                    </button>


                    <div
                        class="invisible absolute left-0 top-[calc(100%+10px)] w-60 translate-y-2 rounded-2xl border border-gray-100 bg-white p-2 opacity-0 shadow-2xl shadow-black/10 transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">

                        <div class="mb-1 flex items-center gap-3 rounded-xl bg-gray-50 p-3">

                            <span
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gray-900 text-sm font-bold text-white">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>

                            <div class="min-w-0">
                                <p class="truncate text-xs font-bold text-gray-900">
                                    {{ Auth::user()->name }}
                                </p>

                                <p class="mt-1 truncate text-[10px] text-gray-400">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>

                        </div>


                        <a href="{{ route('user.profile') }}"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm text-gray-600 transition hover:bg-gray-50 hover:text-gray-900">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.7">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7" />
                            </svg>

                            حسابي
                        </a>


                        <a href="{{ route('orders.index') }}"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm text-gray-600 transition hover:bg-gray-50 hover:text-gray-900">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.7">
                                <path d="M3 6h18" />
                                <path d="M5 6v14h14V6" />
                                <path d="M9 10v6" />
                                <path d="M15 10v6" />
                                <path d="M8 6V4h8v2" />
                            </svg>

                            طلباتي
                        </a>


                        {{-- <a href="#"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm text-gray-600 transition hover:bg-gray-50 hover:text-gray-900">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.7">
                                <path
                                    d="M20.8 4.6c-1.9-1.6-4.7-1.4-6.4.4L12 7.4l-2.4-2.4c-1.7-1.8-4.5-2-6.4-.4-2.1 1.8-2.2 5-.3 6.9L12 21l9.1-9.5c1.9-1.9 1.8-5.1-.3-6.9Z" />
                            </svg>

                            المفضلة
                        </a> --}}

                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('dashboard') }}"
                                    class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm text-gray-600 transition hover:bg-gray-50 hover:text-gray-900">

                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">

                                        <rect x="3" y="3" width="7" height="7" rx="1" />
                                        <rect x="14" y="3" width="7" height="7" rx="1" />
                                        <rect x="3" y="14" width="7" height="7" rx="1" />
                                        <rect x="14" y="14" width="7" height="7" rx="1" />

                                    </svg>

                                    لوحة التحكم
                                </a>
                            @endif
                        @endauth


                        <div class="my-1 h-px bg-gray-100"></div>


                        <form action="{{ route('logout') }}" method="POST">

                            @csrf

                            <button type="submit"
                                class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-sm text-red-600 transition hover:bg-red-50">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.7">
                                    <path d="M10 17l5-5-5-5" />
                                    <path d="M15 12H3" />
                                    <path d="M21 19V5a2 2 0 0 0-2-2h-6" />
                                </svg>

                                تسجيل الخروج
                            </button>

                        </form>

                    </div>

                </div>

            @endauth


            @guest

                <a href="{{ route('register') }}"
                    class="hidden h-10 items-center gap-2 rounded-xl bg-gray-900 px-4 text-xs font-bold text-white shadow-sm transition duration-200 hover:bg-black sm:flex">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                        <path d="m10 17 5-5-5-5" />
                        <path d="M15 12H3" />
                    </svg>

                    أنشاء حساب
                </a>

            @endguest


            <button type="button" id="mobileMenuButton" aria-label="فتح القائمة"
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 bg-white text-gray-700 transition hover:bg-gray-50 lg:hidden">

                <svg id="menuIcon" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M4 6h16" />
                    <path d="M4 12h16" />
                    <path d="M4 18h16" />
                </svg>

            </button>

        </div>

    </div>
    <div id="mobileMenu" class="hidden border-t border-gray-100 bg-white lg:hidden">

        <div class="mx-auto max-w-[1500px] space-y-3 px-4 py-4 sm:px-6">

            <form class="relative">

                <svg class="pointer-events-none absolute right-4 top-1/2 h-5 w-5 -translate-y-1/2 text-gray-400"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="11" cy="11" r="7" />
                    <path d="m20 20-4-4" />
                </svg>

                <input type="search" placeholder="ابحث عن منتج، ماركة، أو فئة..."
                    class="h-11 w-full rounded-xl border border-gray-200 bg-gray-50 pr-12 pl-4 text-sm outline-none transition focus:border-gray-300 focus:bg-white focus:ring-4 focus:ring-gray-100">

            </form>

            <nav class="grid gap-1">

                <a href="{{ route('home') }}"
                    class="flex items-center gap-3 rounded-xl bg-gray-100 px-4 py-3 text-sm font-bold text-gray-900">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path d="m3 10 9-7 9 7" />
                        <path d="M5 9v11h14V9" />
                        <path d="M9 20v-6h6v6" />
                    </svg>

                    الرئيسية
                </a>


                <a href="{{ route('all_products') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-gray-100 hover:text-gray-900">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path d="m3 7 3-3h12l3 3" />
                        <path d="M4 7h16v13H4z" />
                        <path d="M9 11h6" />
                    </svg>

                    المنتجات
                </a>


                <a href="#"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-gray-100 hover:text-gray-900">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path d="M20 12V8l-8-5-8 5v4" />
                        <path d="M4 12l8 5 8-5" />
                        <path d="M12 17v5" />
                    </svg>

                    العروض
                </a>


                <a href="{{croute('contact') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-gray-600 transition hover:bg-gray-100 hover:text-gray-900">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path
                            d="M21 11.5a8.4 8.4 0 0 1-9 8.5 9.3 9.3 0 0 1-4.3-1.1L3 20l1.5-4.3A8.4 8.4 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5Z" />
                        <path d="M8 12h.01" />
                        <path d="M12 12h.01" />
                        <path d="M16 12h.01" />
                    </svg>

                    تواصل معنا
                </a>

            </nav>

            @auth

                <div class="border-t border-gray-100 pt-3">

                    <a href="{{ route('user.profile') }}"
                        class="flex items-center gap-3 rounded-xl px-3 py-3 transition hover:bg-gray-50">

                        <span
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-900 text-sm font-bold text-white">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </span>

                        <span class="min-w-0">
                            <span class="block text-[10px] text-gray-400">
                                حسابي
                            </span>

                            <span class="block truncate text-sm font-bold text-gray-800">
                                {{ Auth::user()->name }}
                            </span>
                        </span>

                    </a>


                    <form action="{{ route('logout') }}" method="POST">

                        @csrf

                        <button type="submit"
                            class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50 pr-4">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="M10 17l5-5-5-5" />
                                <path d="M15 12H3" />
                                <path d="M21 19V5a2 2 0 0 0-2-2h-6" />
                            </svg>

                            تسجيل الخروج

                        </button>

                    </form>

                </div>

            @endauth


            @guest

                <div class="border-t border-gray-100 pt-3">

                    <a href=""
                        class="flex items-center justify-center gap-2 rounded-xl bg-gray-900 px-4 py-3 text-sm font-bold text-white transition hover:bg-black">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <path d="m10 17 5-5-5-5" />
                            <path d="M15 12H3" />
                        </svg>

                        تسجيل الدخول

                    </a>

                </div>

            @endguest

        </div>

    </div>

</header>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        const button = document.getElementById('mobileMenuButton');
        const menu = document.getElementById('mobileMenu');
        const icon = document.getElementById('menuIcon');

        if (!button || !menu || !icon) return;

        button.addEventListener('click', function() {

            const isHidden = menu.classList.toggle('hidden');

            if (isHidden) {

                icon.innerHTML = `
                    <path d="M4 6h16"/>
                    <path d="M4 12h16"/>
                    <path d="M4 18h16"/>
                `;

                button.setAttribute('aria-label', 'فتح القائمة');

            } else {

                icon.innerHTML = `
                    <path d="M6 6l12 12"/>
                    <path d="M18 6L6 18"/>
                `;

                button.setAttribute('aria-label', 'إغلاق القائمة');

            }

        });

    });
</script>
