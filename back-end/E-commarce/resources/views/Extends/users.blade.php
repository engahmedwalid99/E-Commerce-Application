@extends('Admin.dashboard')

@section('title')
    المستخدمين
@endsection

@section('page-title')
    المستخدمين
@endsection

@section('page-subtitle')
    يمكنك حظر مستخدم من استخدام الموقع، وإلغاء الحظر وحذف المستخدمين
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

                                    <div>

                                        <div class="flex items-center gap-2">

                                            <b class="text-[13px] font-bold">
                                                {{ $user->name }}
                                            </b>

                                            @if ($user->email == env('OWNER'))

                                                <span
                                                    class="inline-flex items-center gap-1 rounded-full bg-amber-50 px-2 py-0.5 text-[9px] font-extrabold text-amber-700">

                                                    <svg
                                                        class="h-3 w-3"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="2">

                                                        <path d="M3 7l4 4 5-7 5 7 4-4-2 12H5L3 7Z" />
                                                        <path d="M5 19h14" />

                                                    </svg>

                                                    OWNER

                                                </span>

                                            @endif

                                        </div>

                                    </div>

                                </div>

                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px] text-muted">

                                {{ $user->email }}

                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px]">

                                {{ $user->orders->count() }}

                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5 text-[13px]">

                                {{ optional($user->created_at)->format('d/m/Y') }}

                            </td>


                            <td class="whitespace-nowrap px-3 py-3.5">

                                @if ($user->email == env('OWNER'))

                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-amber-50 px-2.5 py-1 text-[11px] font-extrabold text-amber-700">

                                        <svg
                                            class="h-3 w-3"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2">

                                            <path d="M12 3l7 4v5c0 4.5-3 7-7 9-4-2-7-4.5-7-9V7l7-4Z" />

                                            <path d="m9 12 2 2 4-4" />

                                        </svg>

                                        مالك النظام

                                    </span>

                                @elseif (isset($user->status) && $user->status == 0)

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

                                    @if ($user->email == env('OWNER'))

                                        <span
                                            class="flex h-8 w-8 cursor-not-allowed items-center justify-center rounded-lg border border-amber-200 bg-amber-50 text-amber-600"
                                            title="حساب مالك النظام - لا يمكن تعديله">

                                            <svg
                                                class="h-[16px] w-[16px]"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.8">

                                                <path
                                                    d="M12 3l7 4v5c0 4.5-3 7-7 9-4-2-7-4.5-7-9V7l7-4Z" />

                                                <path
                                                    d="M9 12l2 2 4-4" />

                                            </svg>

                                        </span>


                                        <span
                                            class="flex h-8 w-8 cursor-not-allowed items-center justify-center rounded-lg border border-line bg-gray-50 text-muted"
                                            title="لا يمكن حذف أو حظر مالك النظام">

                                            <svg
                                                class="h-[15px] w-[15px]"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.8">

                                                <rect
                                                    x="5"
                                                    y="10"
                                                    width="14"
                                                    height="10"
                                                    rx="2" />

                                                <path
                                                    d="M8 10V7a4 4 0 0 1 8 0v3" />

                                            </svg>

                                        </span>


                                    @else

                                        <form
                                            action="{{ route('delete_user', $user->id) }}"
                                            method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-red-400 hover:text-red-500"
                                                title="حذف">

                                                <svg
                                                    class="h-[15px] w-[15px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8">

                                                    <path d="M3 6h18" />

                                                    <path d="M8 6V4h8v2" />

                                                    <path d="M19 6l-1 14H6L5 6" />

                                                    <path d="M10 11v5" />

                                                    <path d="M14 11v5" />

                                                </svg>

                                            </button>

                                        </form>


                                        @if (isset($user->status) && $user->status == 0)

                                            <form
                                                action="{{ route('active-user', $user->id) }}"
                                                method="POST">

                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-emerald-400 hover:text-emerald-600"
                                                    title="تفعيل">

                                                    <svg
                                                        class="h-[15px] w-[15px]"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="1.8">

                                                        <path d="M20 6 9 17l-5-5" />

                                                    </svg>

                                                </button>

                                            </form>

                                        @else

                                            <form
                                                action="{{ route('block-user', $user->id) }}"
                                                method="POST">

                                                @csrf

                                                <button
                                                    type="submit"
                                                    class="flex h-8 w-8 items-center justify-center rounded-lg border border-line text-muted transition hover:border-red-400 hover:text-red-500"
                                                    title="إيقاف">

                                                    <svg
                                                        class="h-[15px] w-[15px]"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="1.8">

                                                        <circle
                                                            cx="12"
                                                            cy="12"
                                                            r="9" />

                                                        <path d="m5 5 14 14" />

                                                    </svg>

                                                </button>

                                            </form>

                                        @endif

                                    @endif

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="px-6 py-10 text-center text-[13px] text-muted">

                                لا يوجد مستخدمون حتى الآن

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        <div
            class="flex flex-wrap items-center justify-between gap-3 border-t border-line px-5 py-3.5 sm:px-6">

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
