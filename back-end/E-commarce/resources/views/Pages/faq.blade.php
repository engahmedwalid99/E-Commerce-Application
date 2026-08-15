<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الأسئلة الشائعة | {{ env('APP_NAME') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">

    <x-navbar />

    <main class="max-w-5xl mx-auto px-4 py-12">

        <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10">

            <h1 class="text-3xl font-bold text-[#172033] mb-8">
                الأسئلة الشائعة
            </h1>

            <div class="space-y-4">

                <details class="border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer text-[#172033]">
                        كيف يمكنني شراء منتج؟
                    </summary>

                    <p class="text-gray-600 leading-8 mt-4">
                        قم باختيار المنتج الذي ترغب في شرائه، ثم اضغط على
                        "أضف إلى السلة"، وبعد ذلك انتقل إلى السلة وأكمل عملية
                        إتمام الطلب.
                    </p>
                </details>


                <details class="border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer text-[#172033]">
                        كيف يمكنني متابعة طلبي؟
                    </summary>

                    <p class="text-gray-600 leading-8 mt-4">
                        يمكنك متابعة حالة طلبك من خلال حسابك على الموقع
                        إذا كانت خاصية متابعة الطلبات متاحة.
                    </p>
                </details>


                <details class="border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer text-[#172033]">
                        هل يمكنني إلغاء الطلب؟
                    </summary>

                    <p class="text-gray-600 leading-8 mt-4">
                        يمكنك طلب إلغاء الطلب قبل شحنه. بعد شحن الطلب قد تختلف
                        إمكانية الإلغاء حسب حالة الطلب.
                    </p>
                </details>


                <details class="border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer text-[#172033]">
                        هل يمكنني إرجاع المنتج؟
                    </summary>

                    <p class="text-gray-600 leading-8 mt-4">
                        نعم، يمكنك طلب إرجاع المنتج وفقًا لشروط
                        <a href="{{ route('return.policy') }}"
                            class="text-blue-600 hover:underline">
                            سياسة الإرجاع
                        </a>.
                    </p>
                </details>


                <details class="border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer text-[#172033]">
                        كم يستغرق توصيل الطلب؟
                    </summary>

                    <p class="text-gray-600 leading-8 mt-4">
                        تختلف مدة التوصيل حسب المحافظة وموقع العميل وشركة الشحن.
                    </p>
                </details>


                <details class="border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer text-[#172033]">
                        هل يمكنني تغيير عنوان التوصيل؟
                    </summary>

                    <p class="text-gray-600 leading-8 mt-4">
                        يمكن تغيير العنوان قبل تجهيز أو شحن الطلب، حسب حالة
                        الطلب وقت التواصل معنا.
                    </p>
                </details>


                <details class="border border-gray-200 rounded-xl p-5">
                    <summary class="font-bold cursor-pointer text-[#172033]">
                        كيف أتواصل مع خدمة العملاء؟
                    </summary>

                    <p class="text-gray-600 leading-8 mt-4">
                        يمكنك التواصل مع خدمة العملاء من خلال وسائل التواصل
                        الموجودة في الموقع.
                    </p>
                </details>

            </div>

        </div>

    </main>

    <x-footer />

</body>

</html>