<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>طلباتي | {{ env('APP_NAME') }}</title>

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

    <main class="max-w-6xl mx-auto px-4 py-10">

        <div class="flex items-center justify-between mb-8">

            <div>

                <h1 class="text-3xl font-bold text-[#172033]">
                    طلباتي
                </h1>

                <p class="text-gray-500 mt-2">
                    جميع الطلبات التي قمت بها
                </p>

            </div>

            <svg
                class="w-12 h-12 text-blue-600"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">

                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 4h13m-11 4a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />

            </svg>

        </div>


        @if($orders->count() == 0)

            <div class="bg-white rounded-2xl shadow-sm p-12 text-center">

                <svg
                    class="w-20 h-20 mx-auto text-gray-300 mb-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 4h13m-11 4a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />

                </svg>

                <h2 class="text-xl font-bold text-gray-700">
                    لا توجد طلبات
                </h2>

                <p class="text-gray-500 mt-2 mb-6">
                    لم تقم بعمل أي طلب حتى الآن.
                </p>

                <a
                    href="{{ route('all_products') }}"
                    class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">

                    ابدأ التسوق

                </a>

            </div>

        @else

            <div class="space-y-5">

                @foreach($orders as $order)

                    <div class="bg-white rounded-2xl shadow-sm p-6">

                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                            <div>

                                <p class="text-sm text-gray-500">
                                    رقم الطلب
                                </p>

                                <h2 class="text-xl font-bold text-[#172033]">
                                    - {{ $order->id }}
                                </h2>

                                <p class="text-sm text-gray-500 mt-2">
                                    {{ $order->created_at->format('Y-m-d H:i') }}
                                </p>

                            </div>


                            <div>

                                <p class="text-sm text-gray-500">
                                    الإجمالي
                                </p>

                                <p class="text-xl font-bold text-blue-600">
                                    {{ number_format($order->total, 2) }}
                                    EGP
                                </p>

                            </div>

                            <div>

                                @if($order->status == 'pending')

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


                            <div>

                                <a
                                    href="{{ route('orders.show', $order->id) }}"
                                    class="inline-flex items-center gap-2 bg-[#172033] text-white px-5 py-3 rounded-lg hover:bg-gray-800 transition">

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />

                                    </svg>

                                    تفاصيل الطلب

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </main>

    <x-footer />

</body>

</html>