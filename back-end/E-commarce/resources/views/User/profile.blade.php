<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الملف الشخصي</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            font-family: "Cairo", sans-serif;
        }

        footer.site {
            background: #0E1120;
            color: #9EA2B8;
            padding: 60px 24px 24px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        .footer-grid .logo {
            color: #fff;
            margin-bottom: 14px;
        }

        .footer-grid p {
            font-size: 13px;
            line-height: 1.9;
            max-width: 280px;
        }

        .footer-col h4 {
            color: #fff;
            font-family: 'Tajawal', sans-serif;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .footer-col ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 11px;
        }

        .footer-col a {
            font-size: 13px;
            transition: color .15s;
        }

        .footer-col a:hover {
            color: var(--gold);
        }

        .social-row {
            display: flex;
            gap: 10px;
            margin-top: 16px;
        }

        .social-row a {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .06);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-row svg {
            width: 15px;
            height: 15px;
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 22px;
            font-size: 12.5px;
        }

        .footer-bottom .pay-icons {
            display: flex;
            gap: 8px;
        }

        .footer-bottom .pay-icons span {
            background: rgba(255, 255, 255, .06);
            padding: 5px 10px;
            border-radius: 6px;
            font-size: 11px;
        }

        .err {
            font-family: "Cairo", sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-50 text-gray-900">
    <x-navbar />

    <main class="min-h-screen py-10">

        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">

            <div class="mb-8">

                <div>
                    <div class="mb-3 flex items-center gap-2 text-xs font-medium text-gray-400">

                        <a href="{{ route('home') }}" class="transition hover:text-gray-900">
                            الرئيسية
                        </a>

                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="m9 18 6-6-6-6" />
                        </svg>

                        <span class="text-gray-700">
                            الملف الشخصي
                        </span>

                    </div>

                    <h1 class="text-2xl font-black tracking-tight text-gray-900 sm:text-3xl">
                        الملف الشخصي
                    </h1>

                    <p class="mt-2 text-sm text-gray-500">
                        إدارة بياناتك الشخصية وإعدادات الأمان الخاصة بحسابك
                    </p>
                </div>

                <div class="mt-[20px]">
                    @if (session('success'))
                        <div
                            class="mb-5 flex items-center gap-3 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700">

                            <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <path d="M20 6 9 17l-5-5" />

                            </svg>

                            <span>
                                {{ session('success') }}
                            </span>

                        </div>
                    @endif


                    @if (session('error'))
                        <div
                            class="mb-5 flex items-center gap-3 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm font-semibold text-red-700">

                            <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 8v4" />
                                <path d="M12 16h.01" />

                            </svg>

                            <span>
                                {{ session('error') }}
                            </span>

                        </div>
                    @endif
                </div>

            </div>


            <div class="grid grid-cols-1 gap-6 lg:grid-cols-[260px_1fr]">


                <aside class="lg:sticky lg:top-[90px] lg:self-start">

                    <div class="rounded-2xl border border-gray-100 bg-white p-5 shadow-sm">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-gray-900 to-gray-700 text-lg font-black text-white shadow-sm">
                                A
                            </div>

                            <div class="min-w-0">

                                <h3 class="truncate text-sm font-bold text-gray-900">
                                    {{ Auth::user()->name }}
                                </h3>

                                <p class="mt-1 truncate text-xs text-gray-400">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <nav class="mt-4 rounded-2xl border border-gray-100 bg-white p-2 shadow-sm">
                        <a href="#personal"
                            class="flex mt-3 items-center gap-3 rounded-xl hover:bg-gray-100 px-4 py-3 text-sm font-bold text-gray-900">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7" />
                            </svg>
                            البيانات الشخصية
                        </a>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('dashboard') }}"
                                    class="flex mt-3 items-center gap-3 rounded-xl hover:bg-gray-100 px-4 py-3 text-sm font-bold text-gray-900">

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
                        <a href="#password"
                            class="flex mt-3 items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition hover:bg-gray-100 hover:text-gray-900">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="4" y="10" width="16" height="10" rx="2" />
                                <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                            </svg>
                            تغيير كلمة المرور
                        </a>
                    </nav>
                </aside>
                <div class="space-y-6">
                    <section id="personal"
                        class="scroll-mt-6 rounded-2xl border border-gray-100 bg-white p-6 shadow-sm sm:p-8">
                        <div class="mb-7 flex items-start gap-4 border-b border-gray-100 pb-6">
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gray-900 text-white">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">

                                    <circle cx="12" cy="8" r="4" />
                                    <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-base font-black text-gray-900">
                                    البيانات الشخصية
                                </h2>
                                <p class="mt-1 text-xs leading-relaxed text-gray-400">
                                    قم بتحديث اسمك وبريدك الإلكتروني ومعلومات التواصل الخاصة بك
                                </p>
                            </div>
                        </div>
                        <form class="space-y-5" action="{{ route('update-profile-data') }}" method="POST">
                            @csrf
                            <div>
                                <label class="mb-2 block text-xs font-bold text-gray-700">
                                    الاسم الكامل
                                </label>
                                <input type="text" value="{{ Auth::user()->name }}" placeholder="أدخل اسمك الكامل"
                                    name="name"
                                    class="h-12 w-full rounded-xl border border-gray-200 bg-gray-50 px-4 text-sm text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-gray-400 focus:bg-white focus:ring-4 focus:ring-gray-100">
                                @error('name')
                                    <div class="mt-2 flex items-center gap-1.5 text-xs font-semibold text-red-600">

                                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>
                                        <span class="err">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-2 block text-xs font-bold text-gray-700">
                                    البريد الإلكتروني
                                </label>

                                <input type="email" value="{{ Auth::user()->email }}" name="email"
                                    placeholder="example@email.com"
                                    class="h-12 w-full rounded-xl border border-gray-200 bg-gray-50 px-4 text-sm text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-gray-400 focus:bg-white focus:ring-4 focus:ring-gray-100">
                                @error('email')
                                    <div class="mt-2 flex items-center gap-1.5 text-xs font-semibold text-red-600">

                                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>

                                        <span class="err">{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>


                            <div>

                                <label class="mb-2 block text-xs font-bold text-gray-700">
                                    رقم الهاتف
                                </label>

                                <input type="tel" name="phone"
                                    value="{{ old('phone') ?? Auth::user()->phone }}" placeholder="01xxxxxxxxx"
                                    class="h-12 w-full rounded-xl border border-gray-200 bg-gray-50 px-4 text-sm text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-gray-400 focus:bg-white focus:ring-4 focus:ring-gray-100">
                                @error('phone')
                                    <div class="mt-2 flex items-center gap-1.5 text-xs font-semibold text-red-600">

                                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>

                                        <span class="err">{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>


                            <div>

                                <label class="mb-2 block text-xs font-bold text-gray-700">
                                    المدينة
                                </label>

                                <input type="text" name="city" value="{{ old('city') ?? Auth::user()->city }}"
                                    placeholder="أدخل مدينتك"
                                    class="h-12 w-full rounded-xl border border-gray-200 bg-gray-50 px-4 text-sm text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-gray-400 focus:bg-white focus:ring-4 focus:ring-gray-100">
                                @error('city')
                                    <div class="mt-2 flex items-center gap-1.5 text-xs font-semibold text-red-600">

                                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>

                                        <span class="err">{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>


                            <div class="border-t border-gray-100 pt-6">

                                <button type="submit"
                                    class="flex h-11 items-center gap-2 rounded-xl bg-gray-900 px-6 text-sm font-bold text-white shadow-sm transition hover:bg-black active:scale-95">

                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">

                                        <path d="M20 6 9 17l-5-5" />

                                    </svg>

                                    حفظ التغييرات

                                </button>

                            </div>

                        </form>

                    </section>


                    <section id="password"
                        class="scroll-mt-6 rounded-2xl border border-gray-100 bg-white p-6 shadow-sm sm:p-8">

                        <div class="mb-7 flex items-start gap-4 border-b border-gray-100 pb-6">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gray-900 text-white">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">

                                    <rect x="4" y="10" width="16" height="10" rx="2" />
                                    <path d="M8 10V7a4 4 0 0 1 8 0v3" />

                                </svg>

                            </div>

                            <div>

                                <h2 class="text-base font-black text-gray-900">
                                    تغيير كلمة المرور
                                </h2>

                                <p class="mt-1 text-xs leading-relaxed text-gray-400">
                                    قم بتغيير كلمة المرور للحفاظ على أمان حسابك
                                </p>

                            </div>

                        </div>


                        <form class="space-y-5" action="{{ route('update-password') }}" method="POST">
                            @csrf
                            <div>
                                <label class="mb-2 block text-xs font-bold text-gray-700">
                                    كلمة المرور الحالية
                                </label>

                                <input type="password" placeholder="أدخل كلمة المرور الحالية" name="old_password"
                                    class="h-12 w-full rounded-xl border border-gray-200 bg-gray-50 px-4 text-sm text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-gray-400 focus:bg-white focus:ring-4 focus:ring-gray-100">
                                @error('old_password')
                                    <div class="mt-2 flex items-center gap-1.5 text-xs font-semibold text-red-600">

                                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>

                                        <span class="err">{{ $message }}</span>

                                    </div>
                                @enderror

                            </div>


                            <div>

                                <label class="mb-2 block text-xs font-bold text-gray-700">
                                    كلمة المرور الجديدة
                                </label>

                                <input type="password" placeholder="أدخل كلمة المرور الجديدة" name="new_password"
                                    class="h-12 w-full rounded-xl border border-gray-200 bg-gray-50 px-4 text-sm text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-gray-400 focus:bg-white focus:ring-4 focus:ring-gray-100">
                                @error('new_password')
                                    <div class="mt-2 flex items-center gap-1.5 text-xs font-semibold text-red-600">

                                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>

                                        <span class="err">{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>


                            <div>

                                <label class="mb-2 block text-xs font-bold text-gray-700">
                                    تأكيد كلمة المرور
                                </label>

                                <input type="password" placeholder="أعد كتابة كلمة المرور الجديدة"
                                    name="password_confirmation"
                                    class="h-12 w-full rounded-xl border border-gray-200 bg-gray-50 px-4 text-sm text-gray-800 outline-none transition placeholder:text-gray-400 focus:border-gray-400 focus:bg-white focus:ring-4 focus:ring-gray-100">
                                @error('password_confirmation')
                                    <div class="mt-2 flex items-center gap-1.5 text-xs font-semibold text-red-600">

                                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>

                                        <span class="err">{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>


                            <div class="flex items-start gap-3 rounded-xl bg-gray-50 p-4">

                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-gray-400" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">

                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 11v5" />
                                    <path d="M12 8h.01" />

                                </svg>

                                <p class="text-xs leading-6 text-gray-500">
                                    يجب أن تحتوي كلمة المرور على 8 أحرف على الأقل،
                                    ويفضل استخدام أحرف وأرقام ورموز.
                                </p>

                            </div>


                            <div class="border-t border-gray-100 pt-6">

                                <button type="submit"
                                    class="flex h-11 items-center gap-2 rounded-xl bg-gray-900 px-6 text-sm font-bold text-white shadow-sm transition hover:bg-black active:scale-95">

                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">

                                        <rect x="4" y="10" width="16" height="10" rx="2" />
                                        <path d="M8 10V7a4 4 0 0 1 8 0v3" />

                                    </svg>

                                    تحديث كلمة المرور

                                </button>

                            </div>

                        </form>

                    </section>

                </div>

            </div>

        </div>

    </main>

    <x-footer />

</body>

</html>
