<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        تواصل معنا | {{ env('APP_NAME') }}
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>

        body {
            font-family: 'Cairo', sans-serif;
        }

    </style>

</head>


<body class="bg-gray-100 min-h-screen">

    <x-navbar />


    <main class="max-w-6xl mx-auto px-4 py-12">

        <div class="text-center mb-12">

            <div
                class="w-20 h-20 mx-auto mb-5 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center">

                <svg
                    class="w-10 h-10"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M8 10h8M8 14h5m8-2a9 9 0 11-18 0 9 9 0 0118 0z" />

                </svg>

            </div>


            <h1 class="text-3xl md:text-4xl font-bold text-[#172033]">

                تواصل معنا

            </h1>


            <p class="text-gray-500 mt-3">

                نحن هنا لمساعدتك والإجابة على جميع استفساراتك

            </p>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <a
                href="tel:{{ env('CONTACT_PHONE') }}"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition group">

                <div
                    class="w-14 h-14 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-5 group-hover:scale-105 transition">

                    <svg
                        class="w-7 h-7"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M3 5a2 2 0 012-2h2.28a2 2 0 011.94 1.52l.5 2a2 2 0 01-.45 1.84L8 9.63a16 16 0 006.37 6.37l1.27-1.27a2 2 0 011.84-.45l2 .5A2 2 0 0121 16.72V19a2 2 0 01-2 2C10.72 21 3 13.28 3 4.99V5z" />

                    </svg>

                </div>


                <h2 class="text-xl font-bold text-[#172033]">

                    الهاتف

                </h2>


                <p class="text-gray-500 mt-2">

                    {{ env('CONTACT_PHONE') }}

                </p>

            </a>


            <a
                href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}"
                target="_blank"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition group">

                <div
                    class="w-14 h-14 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-5">

                    <svg
                        class="w-7 h-7"
                        fill="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            d="M12 2a10 10 0 00-8.66 15l-1.09 3.98a.8.8 0 001 .99l4.05-1.04A10 10 0 1012 2zm5.2 14.1c-.22.62-1.28 1.15-1.76 1.2-.45.04-1.03.06-1.66-.1-.38-.1-.86-.28-1.49-.55-2.63-1.14-4.34-3.8-4.47-3.98-.13-.18-1.07-1.42-1.07-2.71s.68-1.92.92-2.18c.24-.27.53-.33.71-.33h.51c.16 0 .38-.06.6.46.22.53.75 1.83.82 1.97.07.13.11.29.02.47-.09.18-.13.29-.27.45-.13.16-.28.36-.4.48-.13.13-.27.27-.12.53.15.26.67 1.1 1.44 1.78.99.88 1.83 1.15 2.09 1.28.26.13.41.11.56-.07.15-.18.64-.75.81-1.01.18-.26.35-.22.59-.13.24.09 1.53.72 1.79.85.26.13.44.2.51.31.07.11.07.64-.15 1.26z" />

                    </svg>

                </div>


                <h2 class="text-xl font-bold text-[#172033]">

                    WhatsApp

                </h2>


                <p class="text-gray-500 mt-2">

                    تواصل معنا مباشرة

                </p>

            </a>

            <a
                href="mailto:{{ env('CONTACT_EMAIL') }}"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition group">

                <div
                    class="w-14 h-14 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-5">

                    <svg
                        class="w-7 h-7"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M3 7l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />

                    </svg>

                </div>


                <h2 class="text-xl font-bold text-[#172033]">

                    البريد الإلكتروني

                </h2>


                <p class="text-gray-500 mt-2 break-all">

                    {{ env('CONTACT_EMAIL') }}

                </p>

            </a>

            <a
                href="{{ env('CONTACT_FACEBOOK') }}"
                target="_blank"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition">

                <div
                    class="w-14 h-14 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-5">

                    <svg
                        class="w-7 h-7"
                        fill="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            d="M13.5 22v-8h2.7l.4-3h-3.1V9.1c0-.9.3-1.5 1.6-1.5h1.7V4.9c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6V11H7v3h2.6v8h3.9z" />

                    </svg>

                </div>


                <h2 class="text-xl font-bold text-[#172033]">
                    Facebook
                </h2>

                <p class="text-gray-500 mt-2">
                    تابعنا على فيسبوك
                </p>

            </a>

            <a
                href="{{ env('CONTACT_INSTAGRAM') }}"
                target="_blank"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition">

                <div
                    class="w-14 h-14 rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center mb-5">

                    <svg
                        class="w-7 h-7"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <rect
                            x="3"
                            y="3"
                            width="18"
                            height="18"
                            rx="5"
                            stroke="currentColor"
                            stroke-width="1.8" />

                        <circle
                            cx="12"
                            cy="12"
                            r="4"
                            stroke="currentColor"
                            stroke-width="1.8" />

                        <circle
                            cx="17.5"
                            cy="6.5"
                            r="1"
                            fill="currentColor" />

                    </svg>

                </div>


                <h2 class="text-xl font-bold text-[#172033]">
                    Instagram
                </h2>

                <p class="text-gray-500 mt-2">
                    تابعنا على Instagram
                </p>

            </a>

            <a
                href="{{ env('CONTACT_TELEGRAM') }}"
                target="_blank"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition">

                <div
                    class="w-14 h-14 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center mb-5">

                    <svg
                        class="w-7 h-7"
                        fill="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            d="M21.5 4.5L18.2 20c-.25 1.1-.9 1.35-1.82.84l-5.02-3.7-2.42 2.33c-.27.27-.5.5-1.02.5l.36-5.1 9.28-8.38c.4-.36-.09-.56-.62-.2L5.5 13.3.58 11.76c-1.07-.34-1.09-1.07.22-1.58L20.02 4.1c.87-.32 1.63.2 1.48.4z" />

                    </svg>

                </div>


                <h2 class="text-xl font-bold text-[#172033]">
                    Telegram
                </h2>

                <p class="text-gray-500 mt-2">
                    تواصل معنا على Telegram
                </p>

            </a>
            <a
                href="{{ env('CONTACT_LINKEDIN') }}"
                target="_blank"
                class="bg-white rounded-2xl shadow-sm p-7 hover:shadow-md transition">

                <div
                    class="w-14 h-14 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center mb-5">

                    <svg
                        class="w-7 h-7"
                        fill="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            d="M5.2 8.2H2V21h3.2V8.2zM3.6 3A1.9 1.9 0 103.6 6.8 1.9 1.9 0 003.6 3zM8.5 8.2H11.6V10h.1c.4-.8 1.5-2.1 3.7-2.1 3.9 0 4.6 2.5 4.6 5.7V21h-3.2v-6.6c0-1.6 0-3.6-2.2-3.6s-2.5 1.7-2.5 3.5V21H8.5V8.2z" />

                    </svg>

                </div>


                <h2 class="text-xl font-bold text-[#172033]">
                    LinkedIn
                </h2>

                <p class="text-gray-500 mt-2">
                    تواصل معنا على LinkedIn
                </p>

            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm p-8 mt-8">

            <div class="flex items-start gap-5">

                <div
                    class="w-14 h-14 flex-shrink-0 rounded-xl bg-red-100 text-red-600 flex items-center justify-center">

                    <svg
                        class="w-7 h-7"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M12 21s7-5.2 7-12a7 7 0 10-14 0c0 6.8 7 12 7 12z" />

                        <circle
                            cx="12"
                            cy="9"
                            r="2.5"
                            stroke="currentColor"
                            stroke-width="1.8" />

                    </svg>

                </div>


                <div>

                    <h2 class="text-xl font-bold text-[#172033]">
                        عنواننا
                    </h2>

                    <p class="text-gray-500 mt-2">
                        {{ env('CONTACT_ADDRESS') }}
                    </p>

                </div>

            </div>

        </div>

    </main>


    <x-footer />

</body>

</html>