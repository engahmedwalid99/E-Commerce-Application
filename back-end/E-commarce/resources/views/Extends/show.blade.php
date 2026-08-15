@extends('Admin.dashboard')

@section('title')
    تفاصيل الطلب {{ $order->id }}
@endsection

@section('page-title')
تفاصيل الطلب
@endsection

@section('page-subtitle')
بيانات المستخدم تتضمن ألاسم, ورقم الهاتف, والمكان الخاص به.
@endsection

@section('admin_orders_show')

<main class="max-w-6xl mx-auto px-4 py-10">

    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-3xl font-bold text-[#172033]">
                تفاصيل الطلب #{{ $order->id }}
            </h1>

            <p class="text-gray-500 mt-2">
                {{ $order->created_at->format('Y-m-d H:i') }}
            </p>

        </div>

        <a href="{{ route('admin.orders.index') }}"
           class="border border-gray-300 px-5 py-3 rounded-lg hover:bg-gray-100">

            العودة للطلبات

        </a>

    </div>


    @if(session('success'))

        <div class="bg-green-100 text-green-700 px-5 py-3 rounded-xl mb-6">
            {{ session('success') }}
        </div>

    @endif


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">


        <div class="bg-white rounded-2xl shadow-sm p-6">

            <h2 class="text-xl font-bold mb-5">
                بيانات العميل
            </h2>

            <div class="space-y-4">

                <div>
                    <p class="text-gray-500 text-sm">
                        الاسم
                    </p>

                    <p class="font-bold">
                        {{ $order->name }}
                    </p>
                </div>


                <div>
                    <p class="text-gray-500 text-sm">
                        الهاتف
                    </p>

                    <p class="font-bold">
                        {{ $order->phone }}
                    </p>
                </div>


                <div>
                    <p class="text-gray-500 text-sm">
                        العنوان
                    </p>

                    <p class="font-bold">
                        {{ $order->address }}
                    </p>
                </div>


                <div>
                    <p class="text-gray-500 text-sm">
                        المدينة
                    </p>

                    <p class="font-bold">
                        {{ $order->city }}
                    </p>
                </div>


                @if($order->notes)

                    <div>

                        <p class="text-gray-500 text-sm">
                            ملاحظات
                        </p>

                        <p class="font-bold">
                            {{ $order->notes }}
                        </p>

                    </div>

                @endif

            </div>

        </div>



        <div class="bg-white rounded-2xl shadow-sm p-6">

            <h2 class="text-xl font-bold mb-5">
                حالة الطلب
            </h2>


            <form action="{{ route('admin.orders.updateStatus', $order->id) }}"
                  method="POST">

                @csrf

                @method('PUT')


                <label class="block text-gray-600 mb-2">
                    اختر الحالة
                </label>


                <select name="status"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 mb-5 focus:ring-2 focus:ring-blue-500">

                    <option value="pending"
                        @selected($order->status == 'pending')>
                        قيد المراجعة
                    </option>

                    <option value="processing"
                        @selected($order->status == 'processing')>
                        جاري التجهيز
                    </option>

                    <option value="shipped"
                        @selected($order->status == 'shipped')>
                        جاري التسليم
                    </option>

                    <option value="completed"
                        @selected($order->status == 'completed')>
                        مكتمل
                    </option>

                    <option value="cancelled"
                        @selected($order->status == 'cancelled')>
                        ملغي
                    </option>

                </select>


                <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">

                    تحديث حالة الطلب

                </button>

            </form>

        </div>



        <div class="bg-[#172033] text-white rounded-2xl shadow-sm p-6">

            <p class="text-gray-300">
                إجمالي الطلب
            </p>

            <p class="text-3xl font-bold mt-3">
                {{ number_format($order->total, 2) }}
                جنيه
            </p>

        </div>

    </div>



    <div class="bg-white rounded-2xl shadow-sm mt-6 p-6">

        <h2 class="text-xl font-bold mb-6">
            المنتجات
        </h2>


        <div class="space-y-4">

            @foreach($order->items as $item)

                <div class="border rounded-xl p-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                    <div>

                        <h3 class="font-bold text-lg">
                            {{ $item->product_name }}
                        </h3>

                        <p class="text-gray-500 mt-1">
                            السعر:
                            {{ number_format($item->price, 2) }}
                            EGP
                        </p>

                    </div>


                    <div>

                        <p class="text-gray-500">
                            الكمية
                        </p>

                        <p class="font-bold">
                            {{ $item->quantity }}
                        </p>

                    </div>


                    <div>

                        <p class="text-gray-500">
                            الإجمالي
                        </p>

                        <p class="font-bold text-blue-600">
                            {{ number_format($item->total, 2) }}
                            EGP
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</main>

@endsection