<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>إتمام الطلب | {{ env('APP_NAME') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">

    <x-navbar />

    <main class="max-w-6xl mx-auto px-4 py-10">

        <h1 class="text-3xl font-bold text-[#172033] mb-8">
            إتمام الطلب
        </h1>

        <form action="{{ route('checkout.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2">

                    <div class="bg-white rounded-2xl shadow-sm p-6">

                        <h2 class="text-xl font-bold text-[#172033] mb-6">
                            بيانات التوصيل
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                            <div>
                                <label class="block mb-2 font-semibold">
                                    الاسم الكامل
                                </label>

                                <input type="text" name="name"
                                    value="{{ old('name', auth()->user()->name ?? '') }}"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">

                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <div>
                                <label class="block mb-2 font-semibold">
                                    رقم الهاتف
                                </label>

                                <input type="text" name="phone" value="{{ old('phone') }}"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">

                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <div class="md:col-span-2">

                                <label class="block mb-2 font-semibold">
                                    العنوان
                                </label>

                                <textarea name="address" rows="4"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('address') }}</textarea>

                                @error('address')
                                    <p class="text-red-500 text-sm mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            <div>

                                <label class="block mb-2 font-semibold">
                                    المحافظة
                                </label>

                                <input type="text" name="city" value="{{ old('city') }}"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">

                            </div>


                            <div>

                                <label class="block mb-2 font-semibold">
                                    ملاحظات الطلب
                                </label>

                                <input type="text" name="notes" value="{{ old('notes') }}"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">

                            </div>

                        </div>

                    </div>

                </div>


                <div>

                    <div class="bg-white rounded-2xl shadow-sm p-6 sticky top-5">

                        <h2 class="text-xl font-bold mb-6">
                            ملخص الطلب
                        </h2>


                        <div class="space-y-4">

                            @foreach ($cart as $item)
                                <div class="flex justify-between gap-3 border-b pb-4">

                                    <div>

                                        <p class="font-semibold text-gray-800">
                                            {{ $item['name'] }}
                                        </p>

                                        <p class="text-sm text-gray-500">
                                            الكمية:
                                            {{ $item['quantity'] }}
                                        </p>

                                    </div>

                                    <p class="font-bold text-blue-600">

                                        {{ number_format($item['price'] * $item['quantity'], 2) }}

                                        جنيه

                                    </p>

                                </div>
                            @endforeach

                        </div>


                        <div class="border-t mt-6 pt-5">

                            <div class="flex justify-between items-center">

                                <span class="text-lg font-bold">
                                    الإجمالي
                                </span>
                                @php
                                    $total = 0;

                                    foreach ($cart as $item) {
                                        $total += $item['price'] * $item['quantity'];
                                    }
                                @endphp

                                <span class="text-2xl font-bold text-blue-600">

                                    {{ number_format($total, 2) }}

                                    EGP

                                </span>

                            </div>

                        </div>


                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-3 rounded-lg mt-6 font-bold hover:bg-blue-700 transition">

                            تأكيد الطلب

                        </button>


                        <a href="{{ route('cart') }}"
                            class="block text-center border border-gray-300 text-gray-700 py-3 rounded-lg mt-3 hover:bg-gray-100 transition">

                            العودة للسلة

                        </a>

                    </div>

                </div>

            </div>

        </form>

    </main>

    <x-footer />

</body>

</html>
