@extends('Admin.dashboard')

@section('title')
    الطلبات
@endsection

@section('page-title')
الطلبات الوارده
@endsection

@section('page-subtitle')
قم برؤيه كل الطلبات وابدا بالشحن
@endsection

@section('admin_orders_index')

<main class="max-w-7xl mx-auto px-4 py-10">

    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-3xl font-bold text-[#172033]">
                جميع الطلبات
            </h1>

            <p class="text-gray-500 mt-2">
                إدارة ومتابعة جميع طلبات العملاء
            </p>
        </div>

        <svg class="w-12 h-12 text-blue-600"
             fill="none"
             stroke="currentColor"
             viewBox="0 0 24 24">

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="1.5"
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 4h13m-11 4a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />

        </svg>

    </div>


    @if(session('success'))

        <div class="bg-green-100 text-green-700 px-5 py-3 rounded-xl mb-6">
            {{ session('success') }}
        </div>

    @endif


    @if($orders->count() == 0)

        <div class="bg-white rounded-2xl shadow-sm p-12 text-center">

            <h2 class="text-xl font-bold text-gray-700">
                لا توجد طلبات
            </h2>

        </div>

    @else

        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

            <div class="overflow-x-auto">

                <table class="w-full text-right">

                    <thead class="bg-gray-100">

                        <tr>

                            <th class="px-6 py-4">
                                رقم الطلب
                            </th>

                            <th class="px-6 py-4">
                                العميل
                            </th>

                            <th class="px-6 py-4">
                                الهاتف
                            </th>

                            <th class="px-6 py-4">
                                الإجمالي
                            </th>

                            <th class="px-6 py-4">
                                الحالة
                            </th>

                            <th class="px-6 py-4">
                                التاريخ
                            </th>

                            <th class="px-6 py-4">
                                التفاصيل
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y">

                        @foreach($orders as $order)

                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-5 font-bold">
                                    - {{ $order->id }}
                                </td>


                                <td class="px-6 py-5">

                                    {{ $order->name }}

                                    @if($order->user)
                                        <div class="text-xs text-gray-400">
                                            {{ $order->user->email }}
                                        </div>
                                    @endif

                                </td>


                                <td class="px-6 py-5">
                                    {{ $order->phone }}
                                </td>


                                <td class="px-6 py-5 font-bold text-blue-600 whitespace-nowrap">
                                    {{ number_format($order->total, 2) }}
                                    EGP
                                </td>


                                <td class="px-6 py-5 whitespace-nowrap">

                                    @if($order->status == 'pending')

                                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-bold">
                                            قيد المراجعة
                                        </span>

                                    @elseif($order->status == 'processing')

                                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-bold">
                                            جاري التجهيز
                                        </span>

                                    @elseif($order->status == 'shipped')

                                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-bold">
                                            جاري التسليم
                                        </span>

                                    @elseif($order->status == 'completed')

                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-bold">
                                            مكتمل
                                        </span>

                                    @elseif($order->status == 'cancelled')

                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-bold">
                                            ملغي
                                        </span>

                                    @endif

                                </td>


                                <td class="px-6 py-5 text-gray-500 whitespace-nowrap">

                                    {{ $order->created_at->format('Y-m-d') }}

                                    <div class="text-xs">
                                        {{ $order->created_at->format('H:i') }}
                                    </div>

                                </td>


                                <td class="px-6 py-5">

                                    <a href="{{ route('admin.orders.show', $order->id) }}"
                                       class="bg-[#172033] text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">

                                        تفاصيل

                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    @endif

</main>

@endsection