@extends('Admin.dashboard')

@section('title', 'لوحة التحكم')
@section('page-title', 'لوحة التحكم')
@section('page-subtitle', 'نظرة عامة على أداء المتجر اليوم')
@section('nav-dashboard', 'bg-gold text-navy shadow-soft')

@section('page-title')
لوحة التحكم
@endsection

@section('page-subtitle')
نظره عامة علي اداء الموقع
@endsection

@section('content')
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4 w-100">
        <div
            class="rounded-2xl border border-line bg-white p-5 shadow-soft transition hover:-translate-y-0.5 hover:shadow-card">
            <div class="mb-4 flex items-start justify-between">
                <div
                    class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-soft text-gold-dark">
                    <svg class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path
                            d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6" />
                    </svg>

                </div>
                <span
                    class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-extrabold text-emerald-700">
                    ▲
                </span>

            </div>

            <b class="font-display block text-2xl font-extrabold">
                {{ $allSales ?? 0 }}
            </b>
            <span class="text-[12.5px] text-muted">
                إجمالي المبيعات
            </span>
        </div>
        <div
            class="rounded-2xl border border-line bg-white p-5 shadow-soft transition hover:-translate-y-0.5 hover:shadow-card">
            <div class="mb-4 flex items-start justify-between">
                <div
                    class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-soft text-gold-dark">
                    <svg class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path
                            d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6" />
                    </svg>
                </div>
                <span
                    class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-extrabold text-emerald-700">
                    ▲
                </span>
            </div>
            <b class="font-display block text-2xl font-extrabold">
                {{ $monthSales ?? 0 }}
            </b>
            <span class="text-[12.5px] text-muted">
                إجمالي ألطلبات هذا الشهر
            </span>
        </div>

        <div
            class="rounded-2xl border border-line bg-white p-5 shadow-soft transition hover:-translate-y-0.5 hover:shadow-card">
            <div class="mb-4 flex items-start justify-between">
                <div
                    class="flex h-11 w-11 items-center justify-center rounded-xl bg-sky-50 text-sky-600">

                    <svg class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8">

                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />

                        <path
                            d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6" />

                    </svg>

                </div>

                <span
                    class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-extrabold text-emerald-700">
                    ▲
                </span>

            </div>

            <b class="font-display block text-2xl font-extrabold">
                {{ $ordersCount ?? 0 }}
            </b>

            <span class="text-[12.5px] text-muted">
                إجمالي الطلبات
            </span>
        </div>
        <div
            class="rounded-2xl border border-line bg-white p-5 shadow-soft transition hover:-translate-y-0.5 hover:shadow-card">
            <div class="mb-4 flex items-start justify-between">

                <div
                    class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">

                    <svg class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8">

                        <circle cx="9" cy="8" r="3.5" />

                        <path
                            d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6" />

                        <path
                            d="M17 4.5a3.5 3.5 0 0 1 0 7" />

                        <path
                            d="M21 20c0-3-2-5.2-4.5-5.9" />

                    </svg>

                </div>

                <span
                    class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-extrabold text-emerald-700">

                    ▲

                </span>

            </div>

            <b class="font-display block text-2xl font-extrabold">

                {{ $usersCount ?? 0 }}

            </b>

            <span class="text-[12.5px] text-muted">
                إجمالي المستخدمين
            </span>

        </div>

        <div
            class="rounded-2xl border border-line bg-white p-5 shadow-soft transition hover:-translate-y-0.5 hover:shadow-card">

            <div class="mb-4 flex items-start justify-between">

                <div
                    class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-orange-600">

                    <svg class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8">

                        <path d="m3 7 3-3h12l3 3" />

                        <path d="M4 7h16v13H4z" />

                        <path d="M9 11h6" />

                    </svg>

                </div>

                <span
                    class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2.5 py-1 text-[11px] font-extrabold text-red-600">

                    ▼

                </span>

            </div>

            <b class="font-display block text-2xl font-extrabold">

                {{ $lowStockCount ?? 0 }}

            </b>

            <span class="text-[12.5px] text-muted">
                منتجات أوشكت على النفاد
            </span>

        </div>

    </div>

@endsection