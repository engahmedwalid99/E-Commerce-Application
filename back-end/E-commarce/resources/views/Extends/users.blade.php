@extends('Admin.dashboard')

@section('title')
    ألمستخدمين
@endsection

@section('page-title')
المستخدمين
@endsection

@section('page-subtitle')
يمكنك حظر مستحدم من استخدام الموقع وايضا يمكنك الغاء الحظر وحذف المستخدمين
@endsection

@section('users')
    <x-success />

    <div class="mt-6 overflow-hidden rounded-2xl border border-line bg-white shadow-soft" id="users">

        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-line px-5 py-4 sm:px-6">
            <div>
                <h2 class="text-[15.5px] font-extrabold">
                    المستخدمون
                </h2>
                <p class="mt-0.5 text-[12px] text-muted">
                    جميع المستخدمين المسجلين في المتجر
                </p>
            </div>
        </div>
        <div class="overflow-x-auto">

            <table class="w-full min-w-[680px] text-right">

                <thead>

                    <tr class="border-b border-line">

                        <th
                            class="whitespace-nowrap px-5 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted sm:px-6">

                            المستخدم

                        </th>

                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">

                            البريد الإلكتروني

                        </th>

                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">

                            الطلبات

                        </th>

                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">

                            تاريخ التسجيل

                        </th>

                        <th
                            class="whitespace-nowrap px-3 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted">

                            الحالة

                        </th>

                        <th
                            class="whitespace-nowrap px-5 py-3 text-[11.5px] font-extrabold uppercase tracking-wide text-muted sm:px-6">

                            الإجراءات

                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y divide-line">

                    @forelse ($users as $user)
                        <tr class="transition hover:bg-cream/60">

                            <td class="px-5 py-3.5 sm:px-6">

                                <div class="flex items-center gap-2.5">

                                    <span
                                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-gold-soft text-[12px] font-extrabold text-gold-dark">

                                        {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}

                                    </span>

                                    <b class="text-[13px] font-bold">

                                        {{ $user->name }}

                                    </b>

                                </div>

                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px] text-muted">

                                {{ $user->email }}

                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px]">
                                {{ count($user->orders) ?? 0 }}
                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px]">

                                {{ optional($user->created_at)->format('d/m/Y') }}

                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5">

                                @if (isset($user->status) && $user->status == 0)
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2.5 py-1 text-[11px] font-extrabold text-red-600">

                                        موقوف

                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-extrabold text-emerald-700">

                                        مفعّل

                                    </span>
                                @endif

                            </td>


                            <td class="px-5 py-3.5 sm:px-6">

                                <div class="flex gap-1.5">

                                    <form action="{{ route('delete_user', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-red-400 hover:text-red-500"
                                            title="حذف">

                                            <svg class="h-[15px] w-[15px]" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.8">

                                                <path d="M3 6h18" />
                                                <path d="M8 6V4h8v2" />
                                                <path d="M19 6l-1 14H6L5 6" />
                                                <path d="M10 11v5" />
                                                <path d="M14 11v5" />

                                            </svg>

                                        </button>
                                    </form>

                                    @if (isset($user->status) && $user->status == 0)
                                        <form action="{{ route('active-user', $user->id) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-emerald-400 hover:text-emerald-600"
                                                title="تفعيل">

                                                <svg class="h-[15px] w-[15px]" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.8">
                                                    <path d="M20 6 9 17l-5-5" />
                                                </svg>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('block-user', $user->id) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-red-400 hover:text-red-500"
                                                title="إيقاف">

                                                <svg class="h-[15px] w-[15px]" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.8">

                                                    <circle cx="12" cy="12" r="9" />

                                                    <path d="m5 5 14 14" />

                                                </svg>

                                            </button>
                                        </form>
                                    @endif

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="px-6 py-10 text-center text-[13px] text-muted">

                                لا يوجد مستخدمون حتى الآن

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>
        <div class="flex flex-wrap items-center justify-between gap-3 border-t border-line px-5 py-3.5 sm:px-6">

            <span class="text-[12px] text-muted">

                @if (isset($users) && $users instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    عرض
                    {{ $users->firstItem() ?? 0 }}
                    –
                    {{ $users->lastItem() ?? 0 }}
                    من أصل
                    {{ $users->total() }}
                    مستخدم
                @else
                    لا يوجد مستخدمون
                @endif

            </span>

            @if (method_exists($users, 'links'))
                <div class="flex gap-1.5">
                    {{ $users->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
