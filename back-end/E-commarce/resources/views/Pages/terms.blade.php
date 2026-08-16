<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الشروط والأحكام | {{ env('APP_NAME') }}</title>

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

        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

            <div class="bg-[#172033] text-white p-8 md:p-10">

                <div class="flex items-center gap-4">

                    <div class="bg-white/10 p-3 rounded-xl">

                        <svg class="w-10 h-10" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />

                        </svg>

                    </div>

                    <div>

                        <h1 class="text-3xl font-bold">
                            الشروط والأحكام
                        </h1>

                        <p class="text-gray-300 mt-2">
                            يرجى قراءة الشروط والأحكام قبل استخدام الموقع.
                        </p>

                    </div>

                </div>

            </div>


            <div class="p-6 md:p-10 space-y-10">

                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        1. قبول الشروط
                    </h2>

                    <p class="text-gray-600 leading-8">
                        باستخدامك لموقع {{ env('APP_NAME') }} فإنك توافق على
                        الالتزام بهذه الشروط والأحكام. إذا كنت لا توافق على
                        أي من هذه الشروط، يرجى عدم استخدام الموقع.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        2. الحساب والبيانات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        يتحمل المستخدم مسؤولية الحفاظ على صحة البيانات التي
                        يقدمها أثناء إنشاء الحساب أو إتمام الطلب، كما يتحمل
                        مسؤولية الحفاظ على بيانات الدخول الخاصة به.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        3. الطلبات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        عند إرسال طلب من خلال الموقع، فإنك توافق على البيانات
                        التي قمت بإدخالها أثناء إتمام الطلب، بما في ذلك
                        بيانات التواصل وعنوان التوصيل.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        4. الأسعار والدفع
                    </h2>

                    <p class="text-gray-600 leading-8">
                        جميع الأسعار المعروضة على الموقع قابلة للتغيير.
                        يتم احتساب السعر الظاهر أثناء إتمام الطلب وفقاً
                        للبيانات المتاحة في ذلك الوقت.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        5. المنتجات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        نسعى إلى عرض معلومات المنتجات والأسعار والصور
                        بأكبر قدر ممكن من الدقة، ولكن قد تحدث بعض الاختلافات
                        غير المقصودة.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        6. إلغاء الطلبات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        قد يتم إلغاء الطلب في بعض الحالات مثل عدم توفر المنتج
                        أو وجود مشكلة في بيانات الطلب أو العنوان.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        7. استخدام الموقع
                    </h2>

                    <p class="text-gray-600 leading-8">
                        يمنع استخدام الموقع بطريقة غير قانونية أو محاولة
                        الوصول إلى بيانات أو أنظمة غير مصرح لك باستخدامها.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        8. تعديل الشروط
                    </h2>

                    <p class="text-gray-600 leading-8">
                        يحتفظ {{ env('APP_NAME') }} بالحق في تعديل هذه
                        الشروط عند الحاجة. سيتم نشر أي تحديثات على هذه الصفحة.
                    </p>

                </section>

            </div>

        </div>

    </main>

    <x-footer />

</body>

</html>
