<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>سياسة الخصوصية | {{ env('APP_NAME') }}</title>

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

                        <svg class="w-10 h-10" fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v2h8z" />

                        </svg>

                    </div>

                    <div>

                        <h1 class="text-3xl font-bold">
                            سياسة الخصوصية
                        </h1>

                        <p class="text-gray-300 mt-2">
                            نحن نهتم بخصوصية بياناتك وحمايتها.
                        </p>

                    </div>

                </div>

            </div>

            <div class="p-6 md:p-10 space-y-10">

                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        1. المعلومات التي نجمعها
                    </h2>

                    <p class="text-gray-600 leading-8">
                        قد نقوم بجمع بعض المعلومات التي تقدمها أثناء استخدام
                        الموقع، مثل الاسم ورقم الهاتف وعنوان التوصيل والبيانات
                        المتعلقة بالطلبات.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        2. استخدام المعلومات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        نستخدم المعلومات التي تقدمها لمعالجة الطلبات،
                        والتواصل معك بشأن الطلبات، وتحسين تجربة استخدام الموقع.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        3. حماية البيانات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        نعمل على حماية البيانات المخزنة في أنظمتنا واتخاذ
                        الإجراءات المناسبة للحد من الوصول غير المصرح به إليها.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        4. مشاركة البيانات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        لا نقوم ببيع بيانات المستخدمين. وقد يتم مشاركة بعض
                        البيانات الضرورية مع الجهات التي تساعد في تنفيذ الطلب،
                        مثل خدمات التوصيل، عند الحاجة.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        5. ملفات تعريف الارتباط
                    </h2>

                    <p class="text-gray-600 leading-8">
                        قد يستخدم الموقع ملفات تعريف الارتباط (Cookies)
                        للحفاظ على الجلسة وتحسين تجربة المستخدم وتوفير
                        بعض وظائف الموقع.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        6. بيانات الطلبات
                    </h2>

                    <p class="text-gray-600 leading-8">
                        يتم الاحتفاظ ببيانات الطلبات اللازمة لإدارة الطلبات
                        وعرض سجل الطلبات للمستخدم وإدارة عمليات المتجر.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        7. حقوق المستخدم
                    </h2>

                    <p class="text-gray-600 leading-8">
                        يمكنك التواصل معنا للاستفسار عن البيانات المرتبطة
                        بحسابك أو طلب المساعدة بخصوص معلوماتك الشخصية،
                        وفقاً للإجراءات المتاحة في الموقع.
                    </p>

                </section>


                <section>

                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        8. تحديث سياسة الخصوصية
                    </h2>

                    <p class="text-gray-600 leading-8">
                        قد يتم تحديث سياسة الخصوصية من وقت لآخر. سيتم نشر
                        التغييرات الجديدة على هذه الصفحة.
                    </p>

                </section>

            </div>

        </div>

    </main>

    <x-footer />

</body>

</html>
