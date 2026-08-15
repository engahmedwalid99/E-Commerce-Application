<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>سياسة الإرجاع | {{ env('APP_NAME') }}</title>

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
                سياسة الإرجاع والاستبدال
            </h1>

            <p class="text-gray-600 leading-8 mb-8">
                نحن نهتم برضا عملائنا، ولذلك يمكنك طلب إرجاع أو استبدال المنتج
                وفقًا للشروط الموضحة في هذه الصفحة.
            </p>

            <div class="space-y-8">

                <section>
                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        مدة الإرجاع
                    </h2>

                    <p class="text-gray-600 leading-8">
                        يمكنك طلب إرجاع المنتج خلال 14 يومًا من تاريخ استلام الطلب،
                        بشرط أن يكون المنتج في حالته الأصلية ولم يتم استخدامه أو
                        إتلافه.
                    </p>
                </section>

                <section>
                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        شروط قبول الإرجاع
                    </h2>

                    <ul class="list-disc pr-6 text-gray-600 leading-9">
                        <li>أن يكون المنتج بحالته الأصلية.</li>
                        <li>عدم استخدام المنتج أو إتلافه.</li>
                        <li>وجود الملحقات الخاصة بالمنتج إن وجدت.</li>
                        <li>تقديم رقم الطلب عند طلب الإرجاع.</li>
                    </ul>
                </section>

                <section>
                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        المنتجات غير القابلة للإرجاع
                    </h2>

                    <p class="text-gray-600 leading-8">
                        بعض المنتجات قد لا تكون قابلة للإرجاع لأسباب تتعلق بطبيعتها
                        أو بحالتها بعد الاستخدام. سيتم توضيح ذلك في صفحة المنتج
                        عند الحاجة.
                    </p>
                </section>

                <section>
                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        استرداد المبلغ
                    </h2>

                    <p class="text-gray-600 leading-8">
                        بعد استلام المنتج والتأكد من مطابقته لشروط الإرجاع،
                        سيتم اتخاذ إجراءات استرداد المبلغ وفقًا لطريقة الدفع
                        المستخدمة.
                    </p>
                </section>

                <section>
                    <h2 class="text-xl font-bold text-[#172033] mb-3">
                        التواصل معنا
                    </h2>

                    <p class="text-gray-600 leading-8">
                        إذا كان لديك أي استفسار بخصوص الإرجاع أو الاستبدال،
                        يمكنك التواصل مع خدمة العملاء.
                    </p>
                </section>

            </div>

        </div>

    </main>

    <x-footer />

</body>

</html>