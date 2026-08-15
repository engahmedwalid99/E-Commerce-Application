<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>تفاصيل الطلب #{{ $order->id }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>

</head>

<body class="bg-gray-100">

    <x-navbar />

    <main class="max-w-6xl mx-auto px-4 py-10">

        <div class="flex items-center justify-between mb-8">

            <div>

                <h1 class="text-3xl font-bold text-[#172033]">
                    الطلب {{ $order->id }}
                </h1>

                <p class="text-gray-500 mt-2">
                    {{ $order->created_at->format('Y-m-d H:i') }}
                </p>

            </div>

            <a href="{{ route('orders.index') }}"
                class="border border-gray-300 bg-white px-5 py-3 rounded-lg hover:bg-gray-50">

                ← العودة للطلبات

            </a>

        </div>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">



            <div class="lg:col-span-2 space-y-4">

                <div class="bg-white rounded-2xl shadow-sm p-6">

                    <h2 class="text-xl font-bold mb-6">
                        المنتجات
                    </h2>

                    @foreach ($order->items as $item)
                        <div class="flex items-center justify-between border-b py-5 last:border-0">

                            <div>

                                <h3 class="font-bold text-gray-800">
                                    {{ $item->product_name }}
                                </h3>

                                <p class="text-gray-500 mt-1">
                                    الكمية: {{ $item->quantity }}
                                </p>

                            </div>

                            <div class="text-left">

                                <p class="font-bold text-blue-600">
                                    {{ number_format($item->price, 2) }} جنيه
                                </p>

                                <p class="text-sm text-gray-500">
                                    الإجمالي:
                                    {{ number_format($item->total, 2) }}
                                    EGP
                                </p>

                            </div>

                        </div>
                    @endforeach

                </div>



                <div class="bg-white rounded-2xl shadow-sm p-6">

                    <h2 class="text-xl font-bold mb-6">
                        معلومات التوصيل
                    </h2>

                    <div class="space-y-4">

                        <p>
                            <strong>الاسم:</strong>
                            {{ $order->name }}
                        </p>

                        <p>
                            <strong>الهاتف:</strong>
                            {{ $order->phone }}
                        </p>

                        <p>
                            <strong>العنوان:</strong>
                            {{ $order->address }}
                        </p>

                        <p>
                            <strong>المدينة:</strong>
                            {{ $order->city }}
                        </p>

                        @if ($order->notes)
                            <p>
                                <strong>ملاحظات:</strong>
                                {{ $order->notes }}
                            </p>
                        @endif

                    </div>

                </div>

            </div>



            <div>

                <div class="bg-white rounded-2xl shadow-sm p-6 sticky top-5">

                    <h2 class="text-xl font-bold mb-6">
                        ملخص الطلب
                    </h2>

                    <div class="flex justify-between mb-5">

                        <span class="text-gray-500">
                            الحالة
                        </span>

                        <div>

                            @if ($order->status == 'pending')
                                <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-bold">
                                    قيد المراجعة
                                </span>
                            @elseif($order->status == 'processing')
                                <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-bold">
                                    جاري التجهيز
                                </span>
                            @elseif($order->status == 'shipped')
                                <span class="bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-bold">
                                    تم الشحن
                                </span>
                            @elseif($order->status == 'completed')
                                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-bold">
                                    مكتمل
                                </span>
                            @elseif($order->status == 'cancelled')
                                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-bold">
                                    ملغي
                                </span>
                            @endif

                        </div>

                    </div>

                    <div class="border-t pt-5 flex justify-between">

                        <span class="font-bold">
                            الإجمالي
                        </span>

                        <span class="text-2xl font-bold text-blue-600">
                            {{ number_format($order->total, 2) }}
                            EGP
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <x-footer />

</body>

</html>
