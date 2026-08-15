@extends('Admin.dashboard')

@section('title')
    ألمنتجات
@endsection

@section('page-title')
المنتجات
@endsection

@section('page-subtitle')
رؤيه كل منتجات علي الموقع
@endsection

@section('products')
    <div class="mt-6 overflow-hidden rounded-2xl border border-line bg-white shadow-soft" id="products">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-line px-5 py-4 sm:px-6">
            <div>
                <h2 class="text-[15.5px] font-extrabold">المنتجات</h2>
                <p class="mt-0.5 text-[12px] text-muted">إدارة وتعديل جميع منتجات المتجر</p>
            </div>

        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[720px] text-right">
                <thead>
                    <tr class="border-b border-line">
                        <th
                            class="whitespace-nowrap px-5 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted sm:px-6">
                            المنتج</th>
                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">
                            الفئة</th>
                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">
                            السعر</th>
                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">
                            المخزون</th>
                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">
                            الحالة</th>
                        <th
                            class="whitespace-nowrap px-5 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted sm:px-6">
                            الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-line">
                    @foreach ($products as $product)
                        <tr class="transition hover:bg-cream/60">
                            <td class="px-5 py-3.5 sm:px-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#F3ECDD]">
                                        <svg class="h-5 w-5 text-gold-dark" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.6">
                                            <rect x="3" y="8" width="18" height="12" rx="2" />
                                            <path d="M8 8V6a4 4 0 0 1 8 0v2" />
                                        </svg>
                                    </div>
                                    <div class="min-w-0">
                                        <b class="block truncate text-[13px] font-bold">{{ $product->name }}</b>
                                        <span class="text-[11.5px] text-muted">{{ $product->sku }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px]">{{ $product->brand }}</td>
                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px] font-semibold">{{ $product->price }}</td>
                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px]">{{ $product->stock }}</td>
                            <td class="whitespace-nowrap px-3 py-3.5">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-extrabold text-emerald-700">{{ $product->status }}</span>
                            </td>
                            <td class="px-5 py-3.5 sm:px-6">

                                <div class="flex gap-1.5">

                                    <a href="{{ route('show_update_product', $product->id) }}">
                                        <button
                                            class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-navy hover:text-navy"
                                            title="تعديل">
                                            <svg class="h-[15px] w-[15px]" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.8">
                                                <path d="M12 20h9" />
                                                <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z" />
                                            </svg>
                                        </button>
                                    </a>

                                    <form action="{{ route('delet_product', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-red-400 hover:text-red-500"
                                            title="حذف">
                                            <svg class="h-[15px] w-[15px]" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.8">
                                                <path d="M3 6h18" />
                                                <path d="M8 6V4h8v2" />
                                                <path d="M19 6l-1 14H6L5 6" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex flex-wrap items-center justify-between gap-3 border-t border-line px-5 py-3.5 sm:px-6">

            <span class="text-[12px] text-muted">
                عرض {{ $products->firstItem() }}–{{ $products->lastItem() }}
                من أصل {{ $products->total() }} منتج
            </span>

            <div class="flex gap-1.5">

                @if ($products->onFirstPage())
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-[12.5px] font-bold text-slate-300">
                        ‹
                    </span>
                @else
                    <a href="{{ $products->previousPageUrl() }}"
                        class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-[12.5px] font-bold text-navy">
                        ‹
                    </a>
                @endif


                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <a href="{{ $products->url($i) }}"
                        class="flex h-8 w-8 items-center justify-center rounded-lg border
                {{ $products->currentPage() == $i ? 'border-navy bg-navy text-white' : 'border-line text-navy' }}
                text-[12.5px] font-bold">

                        {{ $i }}

                    </a>
                @endfor


                @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}"
                        class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-[12.5px] font-bold text-navy">
                        ›
                    </a>
                @else
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-[12.5px] font-bold text-slate-300">
                        ›
                    </span>
                @endif

            </div>
        </div>
    @endsection