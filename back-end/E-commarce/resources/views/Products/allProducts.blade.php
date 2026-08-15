<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>المنتجات | {{ env('APP_NAME') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: #faf8f2;
        }

        .prod-card {
            background: #fff;
            border: 1px solid #eee8da;
            border-radius: 20px;
            overflow: hidden;
            transition: .3s ease;
        }

        .prod-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
        }

        .prod-media {
            height: 280px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .prod-media img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: .4s ease;
        }

        .prod-card:hover .prod-media img {
            transform: scale(1.06);
        }

        .prod-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 5;
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: bold;
        }

        .prod-tag.sale {
            background: #b8912b;
            color: white;
        }

        .wish-btn {
            position: absolute;
            top: 14px;
            left: 14px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 5;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .08);
        }

        .wish-btn svg {
            width: 20px;
            height: 20px;
        }

        .prod-body {
            padding: 20px;
        }

        .prod-cat {
            color: #b8912b;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .prod-name {
            font-size: 17px;
            font-weight: bold;
            color: #172033;
            min-height: 48px;
        }

        .prod-foot {
            margin-top: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .price b {
            font-size: 20px;
            color: #172033;
        }

        .price span {
            font-size: 12px;
            color: #999;
        }

        .add-btn {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #172033;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .2s;
        }

        .add-btn:hover {
            background: #b8912b;
        }

        .add-btn svg {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>

    <x-navbar />

    <x-success />

    <section class="mx-auto max-w-7xl px-6 pt-12">

        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">

            <div>

                <p class="mb-2 text-sm font-bold text-[#b8912b]">
                    {{ env('APP_NAME') }}
                </p>

                <h1 class="text-4xl font-bold text-[#172033]">
                    جميع المنتجات
                </h1>

                <p class="mt-3 text-sm text-gray-500">
                    اكتشف أحدث المنتجات والعروض المتاحة لدينا
                </p>

            </div>


            <div class="relative w-full md:w-80">

                <input type="text" placeholder="ابحث عن منتج..."
                    class="h-12 w-full rounded-xl border border-[#e8e1d2] bg-white px-5 text-sm outline-none focus:border-[#b8912b]">

                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                    🔍
                </span>

            </div>

        </div>

    </section>



    <main class="mx-auto max-w-7xl px-6 pb-16">

        @if ($products->count())

            <div class="mb-6 flex items-center justify-between">

                <p class="text-sm text-gray-500">
                    عدد المنتجات:
                    <strong class="text-[#172033]">
                        {{ $products->count() }}
                    </strong>
                </p>
            </div>


            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                @foreach ($products as $item)
                    <div class="prod-card">

                        <a href="{{ route('product_details', $item->id) }}">

                            <div class="prod-media bg-[#F3ECDD]">

                                @if ($item->sale_price && $item->sale_price < $item->price)
                                    <span class="prod-tag sale">
                                        خصم
                                        {{ round((($item->price - $item->sale_price) / $item->price) * 100) }}%
                                    </span>
                                @endif

                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                                @else
                                    <div class="flex flex-col items-center gap-3 text-[#b8912b]">

                                        <svg class="h-20 w-20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.4">

                                            <rect x="3" y="8" width="18" height="12" rx="2" />

                                            <path d="M8 8V6a4 4 0 0 1 8 0v2" />

                                        </svg>

                                        <span class="text-xs">
                                            لا توجد صورة
                                        </span>

                                    </div>
                                @endif

                            </div>


                            <div class="prod-body">

                                <div class="prod-cat">
                                    {{ $item->category_id }}
                                </div>

                                <div class="prod-name">
                                    {{ $item->name }}
                                </div>

                                <div class="mt-4 border-t border-[#eee8da] pt-4">

                                    <div class="prod-foot">

                                        <div class="price">

                                            @if ($item->sale_price && $item->sale_price < $item->price)
                                                <div>
                                                    <b>
                                                        {{ number_format($item->sale_price, 2) }}
                                                    </b>

                                                    <span>
                                                        EGP
                                                    </span>
                                                </div>

                                                <div class="mt-1">
                                                    <span class="line-through">
                                                        {{ number_format($item->price, 2) }}
                                                        EGP
                                                    </span>
                                                </div>
                                            @else
                                                <b>
                                                    {{ number_format($item->price, 2) }}
                                                </b>

                                                <span>
                                                    EGP
                                                </span>
                                            @endif

                                        </div>
                                        <form action="{{ route('cart.add', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="add-btn cursor-pointer">

                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path d="M12 5v14M5 12h14" />
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            @if (method_exists($products, 'links'))
                <div class="mt-10">
                    {{ $products->links() }}
                </div>
            @endif
        @else
            <div class="rounded-2xl border border-[#eee8da] bg-white py-20 text-center">

                <div class="text-5xl">
                    🛍️
                </div>

                <h2 class="mt-5 text-xl font-bold text-[#172033]">
                    لا توجد منتجات
                </h2>

                <p class="mt-2 text-sm text-gray-500">
                    لم يتم إضافة أي منتجات حتى الآن.
                </p>

            </div>

        @endif

    </main>

    <x-footer />

</body>

</html>
