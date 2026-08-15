<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلة المشتريات</title>
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

        <h2 class="text-2xl font-bold mb-8">
            🛒 سلة المشتريات
        </h2>
        @if (session('success'))
            <div class="bg-green-100 text-green-700 px-5 py-3 rounded-lg mb-5">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 text-red-700 px-5 py-3 rounded-lg mb-5">
                {{ session('error') }}
            </div>
        @endif
        @if (empty($cart))

            <div class="bg-white rounded-xl shadow p-10 text-center">

                <div class="text-6xl mb-5">
                    🛒
                </div>

                <h3 class="text-xl font-bold mb-3">
                    السلة فارغة
                </h3>

                <p class="text-gray-500 mb-6">
                    لم تقم بإضافة أي منتجات إلى السلة بعد.
                </p>

                <a href="{{ url('/') }}"
                    class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    ابدأ التسوق
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 space-y-4">
                    @foreach ($cart as $item)
                        <div class="bg-white rounded-xl shadow p-5">
                            <div class="flex flex-col sm:flex-row gap-5 items-center">
                                <div class="w-32 h-32 flex-shrink-0">

                                    @if (!empty($item['image']))
                                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}"
                                            class="w-full h-full object-cover rounded-lg">
                                    @else
                                        <div
                                            class="w-full h-full bg-gray-200 rounded-lg
                                flex items-center justify-center text-gray-400">
                                            لا توجد صورة
                                        </div>
                                    @endif
                                </div>
                                <div class="flex-1 w-full">
                                    <h3 class="text-lg font-bold text-gray-800 mb-2">
                                        {{ $item['name'] }}
                                    </h3>
                                    <p class="text-blue-600 font-bold text-lg">
                                        {{ number_format($item['price'], 2) }} EGP
                                    </p>
                                    <form action="{{ route('cart.update', $item['id']) }}" method="POST"
                                        class="mt-4 flex items-center gap-2">

                                        @csrf
                                        @method('PUT')

                                        <label class="text-gray-500">
                                            الكمية:
                                        </label>

                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}"
                                            min="1"
                                            class="w-20 border border-gray-300 rounded-lg px-3 py-2 text-center">

                                        <button type="submit"
                                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                            تحديث
                                        </button>
                                    </form>
                                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST"
                                        class="mt-3">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm">
                                            🗑 حذف المنتج
                                        </button>
                                    </form>
                                </div>
                                <div class="text-center">
                                    <p class="text-gray-500 text-sm">
                                        الإجمالي
                                    </p>
                                    <p class="text-xl font-bold text-gray-800">

                                        {{ number_format($item['price'] * $item['quantity'], 2) }}
                                        EGP
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <div class="bg-white rounded-xl shadow p-6 sticky top-[50px]">
                        <h3 class="text-xl font-bold mb-6">
                            ملخص الطلب
                        </h3>
                        @php
                            $total = 0;
                            foreach ($cart as $item) {
                                $total += $item['price'] * $item['quantity'];
                            }
                        @endphp
                        <div class="flex justify-between mb-4 text-gray-600">
                            <span>
                                عدد المنتجات
                            </span>
                            <span>
                                {{ count($cart) }}
                            </span>
                        </div>
                        <div class="border-t pt-4">
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-lg">
                                    الإجمالي
                                </span>
                                <span class="font-bold text-2xl text-blue-600">
                                    {{ number_format($total, 2) }} جنيه
                                </span>
                            </div>
                        </div>
                        <form action="{{ route('cart.clear') }}" method="POST" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('هل أنت متأكد من إفراغ السلة؟')"
                                class="w-full border border-red-500 text-red-600 py-3 rounded-lg font-bold hover:bg-red-50 transition">
                                🗑 إفراغ السلة
                            </button>
                        </form>
                        <a href="{{ route('checkout') }}"
                            class="block text-center bg-blue-600 text-white py-3 rounded-lg mt-6 font-bold hover:bg-blue-700 transition">
                            إتمام الطلب
                        </a>
                        <a href="{{ route('all_products') }}"
                            class="block text-center border border-gray-300 text-gray-700 py-3 rounded-lg mt-3 hover:bg-gray-100 transition">
                            متابعة التسوق
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </main>
    <x-footer />
</body>

</html>
