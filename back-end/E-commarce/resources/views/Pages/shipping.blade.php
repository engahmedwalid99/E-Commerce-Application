<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الشحن والتوصيل | {{ env('APP_NAME') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">

    <x-navbar />

    <main class="max-w-6xl mx-auto px-4 py-12">

        <div class="bg-[#172033] rounded-3xl overflow-hidden mb-10">

            <div class="grid md:grid-cols-2 items-center">

                <div class="p-8 md:p-12 text-white">

                    <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full mb-5">
                        
                        <svg class="w-5 h-5 text-blue-400"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 7h11v10H3zM14 10h4l3 3v4h-7zM5 17a2 2 0 104 0m8 0a2 2 0 104 0" />
                        </svg>

                        <span class="text-sm">
                            خدمة التوصيل
                        </span>

                    </div>

                    <h1 class="text-3xl md:text-4xl font-extrabold mb-5">
                        الشحن والتوصيل
                    </h1>

                    <p class="text-gray-300 leading-8">
                        نحرص على وصول طلباتك إليك بأمان وفي أسرع وقت ممكن،
                        مع توفير تجربة شراء سهلة ومريحة.
                    </p>

                </div>


                <div class="hidden md:flex justify-center items-center p-10">

                    <svg class="w-64 h-64 text-blue-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.2"
                            d="M3 7h11v10H3z" />

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.2"
                            d="M14 10h4l3 3v4h-7z" />

                        <circle cx="7" cy="17" r="2"
                            stroke-width="1.2" />

                        <circle cx="18" cy="17" r="2"
                            stroke-width="1.2" />

                        <path stroke-linecap="round"
                            stroke-width="1.2"
                            d="M14 13h5" />

                    </svg>

                </div>

            </div>

        </div>



        <div class="grid md:grid-cols-2 gap-6">


            <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100
                        hover:shadow-lg transition duration-300">

                <div class="w-14 h-14 rounded-xl bg-blue-50 flex items-center justify-center mb-5">

                    <svg class="w-7 h-7 text-blue-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 7h11v10H3zM14 10h4l3 3v4h-7z" />

                        <circle cx="7" cy="17" r="2"
                            stroke-width="2" />

                        <circle cx="18" cy="17" r="2"
                            stroke-width="2" />

                    </svg>

                </div>

                <h2 class="text-xl font-bold text-[#172033] mb-3">
                    طريقة الشحن
                </h2>

                <p class="text-gray-600 leading-8">
                    نقوم بتوصيل الطلبات إلى العنوان الذي تقوم بإدخاله
                    أثناء إتمام عملية الشراء، مع الحرص على وصول المنتجات
                    بشكل آمن وسليم.
                </p>

            </div>


            <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100
                        hover:shadow-lg transition duration-300">

                <div class="w-14 h-14 rounded-xl bg-green-50 flex items-center justify-center mb-5">

                    <svg class="w-7 h-7 text-green-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <circle cx="12" cy="12" r="9"
                            stroke-width="2" />

                        <path stroke-linecap="round"
                            stroke-width="2"
                            d="M12 7v5l3 2" />

                    </svg>

                </div>

                <h2 class="text-xl font-bold text-[#172033] mb-3">
                    مدة التوصيل
                </h2>

                <p class="text-gray-600 leading-8">
                    تختلف مدة التوصيل حسب المحافظة وموقع العميل وشركة
                    الشحن. سيتم توضيح الموعد المتوقع للتوصيل أثناء
                    إتمام الطلب.
                </p>

            </div>


            <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100
                        hover:shadow-lg transition duration-300">

                <div class="w-14 h-14 rounded-xl bg-purple-50 flex items-center justify-center mb-5">

                    <svg class="w-7 h-7 text-purple-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5h6M9 3h6a1 1 0 011 1v1h2a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h2V4a1 1 0 011-1z" />

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 12h8M8 16h5" />

                    </svg>

                </div>

                <h2 class="text-xl font-bold text-[#172033] mb-3">
                    متابعة الطلب
                </h2>

                <p class="text-gray-600 leading-8">
                    بعد تأكيد الطلب يمكنك متابعة حالة طلبك من خلال
                    حسابك على الموقع ومعرفة آخر تحديثات الطلب.
                </p>

            </div>


            <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100
                        hover:shadow-lg transition duration-300">

                <div class="w-14 h-14 rounded-xl bg-yellow-50 flex items-center justify-center mb-5">

                    <svg class="w-7 h-7 text-yellow-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <circle cx="12" cy="12" r="9"
                            stroke-width="2" />

                        <path stroke-linecap="round"
                            stroke-width="2"
                            d="M12 7v10M9 9h4a2 2 0 010 4H9m0 0h4a2 2 0 010 4H9" />

                    </svg>

                </div>

                <h2 class="text-xl font-bold text-[#172033] mb-3">
                    تكلفة الشحن
                </h2>

                <p class="text-gray-600 leading-8">
                    تختلف تكلفة الشحن حسب موقع التوصيل وحجم الطلب.
                    يتم عرض تكلفة الشحن بشكل واضح قبل تأكيد الطلب.
                </p>

            </div>


            <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100
                        hover:shadow-lg transition duration-300 md:col-span-2">

                <div class="flex flex-col md:flex-row gap-6 items-start">

                    <div class="w-14 h-14 shrink-0 rounded-xl bg-red-50
                                flex items-center justify-center">

                        <svg class="w-7 h-7 text-red-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 9v4" />

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 17h.01" />

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M10.3 3.5L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.5a2 2 0 00-3.4 0z" />

                        </svg>

                    </div>

                    <div>

                        <h2 class="text-xl font-bold text-[#172033] mb-3">
                            تأخير الطلب
                        </h2>

                        <p class="text-gray-600 leading-8">
                            في حالة حدوث أي تأخير غير متوقع، سيتم العمل
                            على حل المشكلة في أسرع وقت ممكن والتواصل
                            مع العميل عند الحاجة.
                        </p>

                    </div>

                </div>

            </div>

        </div>



        <div class="mt-10 bg-blue-600 rounded-2xl p-8 text-center text-white">

            <svg class="w-12 h-12 mx-auto mb-4 opacity-90"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">

                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 7h11v10H3zM14 10h4l3 3v4h-7z" />

                <circle cx="7" cy="17" r="2"
                    stroke-width="2" />

                <circle cx="18" cy="17" r="2"
                    stroke-width="2" />

            </svg>

            <h2 class="text-2xl font-bold mb-3">
                جاهز لطلب منتجاتك؟
            </h2>

            <p class="text-blue-100 mb-6">
                تصفح منتجاتنا واختر ما يناسبك.
            </p>

            <a href="{{ route('all_products') }}"
                class="inline-block bg-white text-blue-600 px-7 py-3 rounded-xl
                       font-bold hover:bg-gray-100 transition">

                تصفح المنتجات

            </a>

        </div>

    </main>

    <x-footer />

</body>

</html>
