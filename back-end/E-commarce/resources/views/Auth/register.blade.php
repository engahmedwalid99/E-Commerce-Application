<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب جديد | {{ env('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700;800;900&family=Cairo:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#12162B',
                        navy2: '#1B2140',
                        gold: '#D4AF37',
                        goldsoft: 'rgba(212,175,55,.15)',
                        cream: '#FAFAF8',
                        ink: '#12162B',
                        muted: '#767B8C',
                        line: '#E7E5E0',
                        danger: '#D64545',
                    },
                    fontFamily: {
                        cairo: ['Cairo', 'sans-serif'],
                        tajawal: ['Tajawal', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="m-0 font-cairo bg-cream text-ink">

    <x-navbar/>

    <div class="grid grid-cols-1 md:grid-cols-[1.05fr_1fr] h-auto md:h-screen md:overflow-hidden" dir="ltr">

        <aside
            class="hidden md:flex relative flex-col justify-between h-screen overflow-y-auto p-14 text-white"
            dir="rtl"
            style="background: radial-gradient(circle at 20% 15%, #1B2140, #12162B 60%);">

            <div class="pointer-events-none absolute inset-0 opacity-100"
                style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cg fill='none' stroke='%23D4AF37' stroke-width='0.6' opacity='0.18'%3E%3Cpath d='M60 0 L90 30 L60 60 L30 30 Z'/%3E%3Cpath d='M60 60 L90 90 L60 120 L30 90 Z'/%3E%3Cpath d='M0 60 L30 30 L60 60 L30 90 Z'/%3E%3Cpath d='M60 60 L90 30 L120 60 L90 90 Z'/%3E%3C/g%3E%3C/svg%3E&quot;); background-size: 120px 120px;">
            </div>

            <div class="relative z-10">
                <div class="flex items-center gap-2.5 font-tajawal font-extrabold text-xl tracking-wide">
                    <span
                        class="w-[34px] h-[34px] rounded-[9px] flex items-center justify-center font-black text-navy text-base"
                        style="background: linear-gradient(135deg, #D4AF37, #8a6d1c);">
                        {{ substr(env('APP_NAME'), 0, 1) }}
                    </span>
                    <span>{{ env('APP_NAME') }}</span>
                </div>
            </div>

            <div class="relative z-10 max-w-[420px] my-auto">

                <span
                    class="inline-flex items-center gap-2 text-[13px] text-gold bg-goldsoft border border-gold/35 px-3.5 py-1.5 rounded-full mb-5">
                    ✦ انضمام جديد
                </span>

                <h1 class="font-tajawal font-black text-[38px] leading-[1.35] mb-4">
                    أنشئ حسابك، وابدأ <span class="text-gold">رحلتك</span> اليوم
                </h1>

                <p class="text-[15.5px] leading-loose text-[#C7CADA] m-0">
                    خطوة واحدة تفصلك عن لوحة تحكم كاملة، وأدوات تساعدك على إنجاز
                    عملك بشكل أسرع وأذكى.
                </p>

                <div class="mt-7 flex flex-col gap-3.5">

                    <div class="flex items-center gap-2.5 text-sm text-[#DEE0EC]">
                        <i
                            class="w-[22px] h-[22px] rounded-full bg-goldsoft border border-gold/40 text-gold not-italic flex items-center justify-center text-xs shrink-0">✓</i>
                        إعداد الحساب في أقل من دقيقة
                    </div>

                    <div class="flex items-center gap-2.5 text-sm text-[#DEE0EC]">
                        <i
                            class="w-[22px] h-[22px] rounded-full bg-goldsoft border border-gold/40 text-gold not-italic flex items-center justify-center text-xs shrink-0">✓</i>
                        بياناتك مشفّرة ومحمية بالكامل
                    </div>

                    <div class="flex items-center gap-2.5 text-sm text-[#DEE0EC]">
                        <i
                            class="w-[22px] h-[22px] rounded-full bg-goldsoft border border-gold/40 text-gold not-italic flex items-center justify-center text-xs shrink-0">✓</i>
                        يمكنك الإلغاء في أي وقت
                    </div>

                </div>

            </div>

            <div class="relative z-10 text-[13px] text-[#8489A0] flex justify-between items-center">
                <span>© {{ date('Y') }} منصّتك. جميع الحقوق محفوظة.</span>
                <a href="{{ route('contact') }}" class="text-[#C7CADA] no-underline">تحتاج مساعدة؟</a>
            </div>
        </aside>

        <section
            class="flex items-start justify-center h-auto md:h-screen md:overflow-y-auto px-6 py-16 bg-white"
            dir="rtl">

            <div class="w-full max-w-[400px] my-auto">
                <h2 class="font-tajawal font-extrabold text-[28px] m-0 mb-1.5">إنشاء حساب جديد</h2>
                <p class="text-muted text-[14.5px] m-0 mb-6">
                    لديك حساب بالفعل؟
                    <a href="{{ route('login') }}" class="text-navy font-bold no-underline border-b-[1.5px] border-gold">تسجيل الدخول</a>
                </p>

                <form method="POST" action="{{ route('create_account') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-[13.5px] font-semibold mb-1.5 text-ink">الاسم الكامل</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                            placeholder="أدخل اسمك الكامل" autofocus autocomplete="name"
                            class="w-full px-3.5 py-3 border-[1.5px] border-line rounded-xl font-cairo text-[14.5px] outline-none bg-[#FCFCFB] transition-colors focus:border-gold focus:ring-[3px] focus:ring-goldsoft focus:bg-white">
                        @error('name')
                            <div class="text-danger text-[12.5px] mt-1.5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-[13.5px] font-semibold mb-1.5 text-ink">البريد الإلكتروني</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                            placeholder="example@email.com" autocomplete="username"
                            class="w-full px-3.5 py-3 border-[1.5px] border-line rounded-xl font-cairo text-[14.5px] outline-none bg-[#FCFCFB] transition-colors focus:border-gold focus:ring-[3px] focus:ring-goldsoft focus:bg-white">
                        @error('email')
                            <div class="text-danger text-[12.5px] mt-1.5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-[13.5px] font-semibold mb-1.5 text-ink">كلمة المرور</label>
                        <input id="password" type="password" name="password" placeholder="••••••••"
                            autocomplete="new-password"
                            class="w-full px-3.5 py-3 border-[1.5px] border-line rounded-xl font-cairo text-[14.5px] outline-none bg-[#FCFCFB] transition-colors focus:border-gold focus:ring-[3px] focus:ring-goldsoft focus:bg-white">
                        @error('password')
                            <div class="text-danger text-[12.5px] mt-1.5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-[13.5px] font-semibold mb-1.5 text-ink">تأكيد كلمة المرور</label>
                        <input id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="••••••••" autocomplete="new-password"
                            class="w-full px-3.5 py-3 border-[1.5px] border-line rounded-xl font-cairo text-[14.5px] outline-none bg-[#FCFCFB] transition-colors focus:border-gold focus:ring-[3px] focus:ring-goldsoft focus:bg-white">
                        @error('password_confirmation')
                            <div class="text-danger text-[12.5px] mt-1.5">{{ $message }}</div>
                        @enderror
                    </div>

                    <label class="flex items-start gap-2 text-[13px] text-muted leading-relaxed my-1.5 mb-5">
                        <input type="checkbox" name="terms" class="w-4 h-4 accent-gold mt-0.5 shrink-0">
                        <span>أوافق على <a href="{{ route('terms') }}" class="text-navy font-semibold no-underline border-b border-gold">شروط الاستخدام</a> و
                            <a href="{{ route('privacy') }}" class="text-navy font-semibold no-underline border-b border-gold">سياسة الخصوصية</a></span>
                    </label>

                    <div class="mb-4">
                        <div class="g-recaptcha mb-2.5" data-sitekey="{{ env('SITE_KEY') }}">
                        </div>
                        @error('g-recaptcha-response')
                            <div class="text-danger text-[12.5px] mt-1.5">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-3.5 border-none rounded-xl bg-navy text-white font-cairo font-bold text-[15px] cursor-pointer transition-colors hover:bg-black active:scale-[0.99]">
                        إنشاء الحساب
                    </button>
                </form>

                <div class="flex items-center gap-3.5 my-6 text-muted text-[13px] before:content-[''] before:flex-1 before:h-px before:bg-line after:content-[''] after:flex-1 after:h-px after:bg-line">
                    أو أنشئ حسابًا بواسطه
                </div>

                <div class="flex flex-row gap-3">
                    <a href="{{ route('google.redirect') }}"
                        class="flex items-center justify-center gap-2.5 w-full py-2.5 rounded-xl border-[1.5px] border-line bg-white font-cairo font-semibold text-[14.5px] text-ink no-underline cursor-pointer transition-colors hover:border-navy hover:bg-cream">
                        <svg class="w-[19px] h-[19px] shrink-0" viewBox="0 0 24 24">
                            <path fill="#EA4335"
                                d="M12 10.2v3.9h5.5c-.24 1.3-1.7 3.8-5.5 3.8-3.3 0-6-2.7-6-6.1s2.7-6.1 6-6.1c1.9 0 3.15.8 3.88 1.5l2.6-2.5C16.9 3 14.7 2 12 2 6.9 2 2.8 6.1 2.8 11.8 S6.9 21.6 12 21.6c6.9 0 9.4-4.8 9.4-7.3 0-.5-.05-.9-.13-1.3H12z" />
                        </svg>
                        Google
                    </a>
                    <a href="{{ route('github.redirect') }}"
                        class="flex items-center justify-center gap-2.5 w-full py-2.5 rounded-xl border-[1.5px] border-line bg-white font-cairo font-semibold text-[14.5px] text-ink no-underline cursor-pointer transition-colors hover:border-navy hover:bg-cream">
                        <svg class="w-[19px] h-[19px] shrink-0" viewBox="0 0 24 24">
                            <path fill="#181717"
                                d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.5 0-.24-.01-.87-.01-1.71-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.9-.64.07-.63.07-.63 1 .07 1.53 1.05 1.53 1.05.9 1.57 2.34 1.12 2.91.86.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.04 1.03-2.76-.1-.26-.45-1.32.1-2.75 0 0 .84-.28 2.75 1.05a9.3 9.3 0 0 1 5 0c1.9-1.33 2.75-1.05 2.75-1.05.55 1.43.2 2.49.1 2.75.64.72 1.03 1.64 1.03 2.76 0 3.94-2.34 4.8-4.57 5.06.36.32.68.94.68 1.9 0 1.37-.01 2.47-.01 2.81 0 .27.18.6.69.5A10.26 10.26 0 0 0 22 12.25C22 6.58 17.52 2 12 2z" />
                        </svg>
                        GitHub
                    </a>
                </div>
            </div>
        </section>
    </div>

    <x-footer/>
</body>

</html>
