@extends('Admin.dashboard')

@section('title')
    ألاشعارات
@endsection

@section('page-title')
أضافه اشعار
@endsection

@section('page-subtitle')
بامكان أي مستخدم رؤيه هذا ألاشعار
@endsection

@section('notifications')
    <x-success />

    <form action="{{ route('send_notifications') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="name" class="mb-2 block text-sm font-medium text-black">
                اسم الإشعار
            </label>

            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="أدخل اسم الإشعار"
                class="w-full rounded-xl border border-slate-700 px-4 py-3 text-sm text-black outline-none transition placeholder:text-slate-500 focus:border-amber-400">

            @error('name')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="mb-2 block text-sm font-medium text-black">
                وصف الإشعار
            </label>

            <textarea id="description" name="description" rows="5" placeholder="أدخل وصف الإشعار"
                class="w-full resize-none rounded-xl border border-slate-700 px-4 py-3 text-sm text-black outline-none transition placeholder:text-slate-500 focus:border-amber-400">{{ old('description') }}</textarea>

            @error('description')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="rounded-xl bg-amber-500 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-amber-400">
            إرسال الإشعار
        </button>

    </form>
@endsection
