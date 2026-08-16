@extends('Admin.dashboard')

@section('title')
    الإشعارات
@endsection

@section('page-title')
    الإشعارات
@endsection

@section('page-subtitle')
    يمكنك التعديل علي الإشعارات او حذفها
@endsection

@section('adminNotification')
    <x-success />

    <div class="min-h-screen px-6 py-8">

        <div class="mx-auto max-w-4xl space-y-5">

            @forelse($notifications as $notification)
                <div
                    class="flex flex-col sm:flex-row items-start sm:items-center gap-4 rounded-xl border border-white/10 bg-slate-950 px-4 py-3 transition hover:border-amber-400/20">
            
                    <div class="flex w-full sm:w-auto items-center gap-4">
                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-amber-500/10 text-amber-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                                <path d="M10 21h4" />
                            </svg>
                        </div>
            
                        <div class="w-full sm:w-48 sm:shrink-0">
                            <h2 class="mt-1 truncate text-sm font-semibold text-white mb-2">
                                {{ $notification->name }}
                            </h2>
                        </div>
                    </div>
            
                    <div class="min-w-0 w-full flex-1">
                        <p class="truncate text-sm text-slate-400">
                            {{ $notification->description }}
                        </p>
                    </div>
            
                    <div class="flex w-full sm:w-auto shrink-0 items-center justify-end sm:justify-start gap-2">
                        <form action="{{ route('show_update_notification', $notification->id) }}" method="GET">
                            <button title="تعديل"
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-white/10 text-slate-400 transition hover:border-amber-400/30 hover:bg-amber-400/10 hover:text-amber-400">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z" />
                                </svg>
                            </button>
                        </form>
            
                        <form action="{{ route('delete_notification', $notification->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="حذف"
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-white/10 text-slate-400 transition hover:border-red-500/30 hover:bg-red-500/10 hover:text-red-400">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 6h18" />
                                    <path d="M8 6V4h8v2" />
                                    <path d="M19 6l-1 14H6L5 6" />
                                    <path d="M10 11v5" />
                                    <path d="M14 11v5" />
                                </svg>
                            </button>
                        </form>
                    </div>
            
                </div>
            @empty

                <div class="rounded-2xl border border-dashed border-white/10 bg-white/[0.02] px-6 py-16 text-center">

                    <div
                        class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-black/5 text-slate-800">

                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">

                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                            <path d="M10 21h4" />

                        </svg>

                    </div>

                    <h3 class="text-lg font-semibold text-black">
                        لا توجد إشعارات
                    </h3>

                    <p class="mt-2 text-sm text-slate-700">
                        لم يتم إنشاء أي إشعارات حتى الآن.
                    </p>

                </div>
            @endforelse

            @if (method_exists($notifications, 'links'))
                    <span class="flex gap-1"
                        style="width: 100%; display: flex;justify-content: end; align-items: center;">{{ $notifications->links() }}</span>
            @endif

        </div>

    </div>
@endsection
