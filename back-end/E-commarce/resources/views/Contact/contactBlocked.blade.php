<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا - حساب محظور | {{ env('APP_NAME') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --navy: #12162B;
            --navy-2: #1B2140;
            --gold: #D4AF37;
            --gold-soft: rgba(212, 175, 55, .15);
            --danger: #D64545;
        }

        body {
            font-family: 'Cairo', sans-serif;
        }

        .hero-bg {
            background: radial-gradient(circle at 75% 20%, var(--navy-2), var(--navy) 65%);
            position: relative;
            overflow: hidden;
        }

        .hero-bg::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cg fill='none' stroke='%23D4AF37' stroke-width='0.6' opacity='0.15'%3E%3Cpath d='M60 0 L90 30 L60 60 L30 30 Z'/%3E%3Cpath d='M60 60 L90 90 L60 120 L30 90 Z'/%3E%3Cpath d='M0 60 L30 30 L60 60 L30 90 Z'/%3E%3Cpath d='M60 60 L90 30 L120 60 L90 90 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 120px 120px;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">

    <section class="hero-bg py-14 px-4">
        <div class="max-w-3xl mx-auto relative z-10 text-center text-white">

            <div
                class="w-20 h-20 mx-auto mb-5 rounded-2xl bg-red-500/10 border border-red-400/30 text-[#D64545] flex items-center justify-center">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9" stroke-width="1.8" />
                    <path stroke-linecap="round" stroke-width="1.8" d="m4.9 4.9 14.2 14.2" />
                </svg>
            </div>

            <h1 class="text-3xl md:text-4xl font-bold">تم حظر حسابك</h1>

            <p class="mt-3 text-[#C7CADA] leading-8 max-w-xl mx-auto">
                لا يمكنك استخدام المتجر حاليًا لأن حسابك تم إيقافه.
                إذا كنت تعتقد أن هذا خطأ أو تحتاج معرفة السبب، يسعدنا مساعدتك عبر إحدى وسائل التواصل التالية.
            </p>

        </div>
    </section>

    <main class="max-w-6xl mx-auto px-4 py-12">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <a
                href="tel:{{ env('CONTACT_PHONE') }}"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition group">

                <div
                    class="w-14 h-14 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-5 group-hover:scale-105 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M3 5a2 2 0 012-2h2.28a2 2 0 011.94 1.52l.5 2a2 2 0 01-.45 1.84L8 9.63a16 16 0 006.37 6.37l1.27-1.27a2 2 0 011.84-.45l2 .5A2 2 0 0121 16.72V19a2 2 0 01-2 2C10.72 21 3 13.28 3 4.99V5z" />
                    </svg>
                </div>

                <h2 class="text-xl font-bold text-[#172033]">الهاتف</h2>
                <p class="text-gray-500 mt-2">{{ env('CONTACT_PHONE') }}</p>
            </a>

            <a
                href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}"
                target="_blank"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition group">

                <div class="w-14 h-14 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2a10 10 0 00-8.66 15l-1.09 3.98a.8.8 0 001 .99l4.05-1.04A10 10 0 1012 2zm5.2 14.1c-.22.62-1.28 1.15-1.76 1.2-.45.04-1.03.06-1.66-.1-.38-.1-.86-.28-1.49-.55-2.63-1.14-4.34-3.8-4.47-3.98-.13-.18-1.07-1.42-1.07-2.71s.68-1.92.92-2.18c.24-.27.53-.33.71-.33h.51c.16 0 .38-.06.6.46.22.53.75 1.83.82 1.97.07.13.11.29.02.47-.09.18-.13.29-.27.45-.13.16-.28.36-.4.48-.13.13-.27.27-.12.53.15.26.67 1.1 1.44 1.78.99.88 1.83 1.15 2.09 1.28.26.13.41.11.56-.07.15-.18.64-.75.81-1.01.18-.26.35-.22.59-.13.24.09 1.53.72 1.79.85.26.13.44.2.51.31.07.11.07.64-.15 1.26z" />
                    </svg>
                </div>

                <h2 class="text-xl font-bold text-[#172033]">WhatsApp</h2>
                <p class="text-gray-500 mt-2">تواصل معنا مباشرة</p>
            </a>

            <a
                href="mailto:{{ env('CONTACT_EMAIL') }}"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition group">

                <div class="w-14 h-14 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-5">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M3 7l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>

                <h2 class="text-xl font-bold text-[#172033]">البريد الإلكتروني</h2>
                <p class="text-gray-500 mt-2 break-all">{{ env('CONTACT_EMAIL') }}</p>
            </a>

        </div>

        <div class="bg-white rounded-2xl shadow-sm p-8 mt-8 border border-red-100">
            <div class="flex items-start gap-5">

                <div
                    class="w-14 h-14 flex-shrink-0 rounded-xl bg-red-100 text-red-600 flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 9v4m0 4h.01M10.29 3.86l-8.18 14.18A1.5 1.5 0 003.5 20.5h17a1.5 1.5 0 001.39-2.46L13.71 3.86a1.5 1.5 0 00-2.42 0z" />
                    </svg>
                </div>

                <div>
                    <h2 class="text-xl font-bold text-[#172033]">قبل التواصل، جهّز هذه المعلومات</h2>
                    <p class="text-gray-500 mt-2 leading-8">
                        لتسريع الرد، يرجى إرفاق بريدك الإلكتروني أو رقم هاتفك المسجل في حسابك،
                        مع توضيح مختصر لسبب اعتقادك أن الحظر تم عن طريق الخطأ.
                        فريق الدعم سيقوم بمراجعة الحساب والرد عليك في أقرب وقت.
                    </p>
                </div>

            </div>
        </div>

    </main>

</body>
</html>