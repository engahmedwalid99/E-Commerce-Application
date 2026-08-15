@extends('Admin.dashboard')

@section('title')
    تعديل الإشعار
@endsection

@section('page-title')
    تعديل الإشعار
@endsection

@section('page-subtitle')
    يمكنك تعديل اسم الإشعار والوصف الخاص به
@endsection

@section('editNotification')

<div class="min-h-screen  px-6 py-8">

    <div class="mx-auto max-w-3xl">

        <div class="rounded-2xl border border-white/10] p-6 shadow-xl">

            <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-500/10 text-amber-400">

                <svg class="h-7 w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round">

                    <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                    <path d="M10 21h4" />

                </svg>

            </div>


            <form action="{{ route('save_update_notification', $notification->id) }}" method="POST">
                @csrf

                <div class="mb-6">

                    <label for="name"
                        class="mb-2 block text-sm font-medium text-black">
                        اسم الإشعار
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $notification->name) }}"
                        placeholder="أدخل اسم الإشعار"
                        class="w-full rounded-xl border border-black px-4 py-3 text-sm text-black outline-none transition placeholder:text-slate-500 focus:border-amber-400"
                    >

                    @error('name')
                        <p class="mt-2 text-sm text-red-400">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
                <div class="mb-6">

                    <label for="description"
                        class="mb-2 block text-sm font-medium text-black">
                        وصف الإشعار
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="6"
                        placeholder="أدخل وصف الإشعار"
                        class="w-full resize-none rounded-xl text-black px-4 py-3 text-sm leading-7 outline-none transition placeholder:text-slate-500 border border-black focus:border-amber-400"
                    >{{ old('description', $notification->description) }}</textarea>

                    @error('description')
                        <p class="mt-2 text-sm text-red-400">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="flex items-center gap-3 border-t border-white/10 pt-6">

                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 rounded-xl bg-amber-500 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-amber-400">

                        <svg class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round">

                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z" />
                            <path d="M17 21v-8H7v8" />
                            <path d="M7 3v5h8" />

                        </svg>

                        حفظ التعديلات

                    </button>


                    <a href="{{ route('adminNotification') }}"
                        class="rounded-xl border border-red-700 px-6 py-3 text-sm font-semibold text-black transition hover:bg-red-600 hover:text-white">

                        إلغاء

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>
@endsection