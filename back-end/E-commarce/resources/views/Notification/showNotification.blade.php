<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ألاشعارات | {{ env('APP_NAME') }}</title>

    <style>
        *{
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body>
    <x-navbar/>

    <div class="min-h-screen bg-slate-950 px-6 py-8">

        <div class="mb-8 flex items-center justify-between">

            <div>
                <h1 class="text-2xl font-bold text-white">
                    الإشعارات
                </h1>

                <p class="mt-1 text-sm text-slate-400">
                    .جميع الإشعارات تم ألتاكد من صحتها جيدا
                </p>
            </div>

        </div>


        @if (session('success'))
            <div
                class="mb-6 rounded-xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-400">
                {{ session('success') }}
            </div>
        @endif

        <div class="space-y-4">

            @forelse($notifications as $notification)
                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.03] p-5 transition hover:border-amber-400/30 hover:bg-white/[0.05]">

                    <div class="flex items-start justify-between gap-4">

                        <div class="flex gap-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-500/10 text-amber-400">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">

                                    <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                                    <path d="M10 21h4" />

                                </svg>

                            </div>

                            <div>

                                <h2 class="text-base font-semibold text-white">
                                    {{ $notification->name }}
                                </h2>

                                <p class="mt-2 max-w-3xl text-sm leading-6 text-slate-400">
                                    {{ $notification->description }}
                                </p>

                                <p class="mt-3 text-xs text-slate-500">
                                    {{ $notification->created_at?->format('Y-m-d H:i') }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="rounded-2xl border border-dashed border-white/10 bg-white/[0.02] px-6 py-16 text-center">

                    <div
                        class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-white/5 text-slate-500">

                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">

                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                            <path d="M10 21h4" />

                        </svg>

                    </div>

                    <h3 class="text-lg font-semibold text-white">
                        لا توجد إشعارات
                    </h3>

                    <p class="mt-2 text-sm text-slate-500">
                        لم يتم إنشاء أي إشعارات حتى الآن.
                    </p>

                </div>
            @endforelse

            @if (method_exists($notifications, 'links'))
                    <span class="flex gap-1" style="width: 100%; display: flex;justify-content: end; align-items: center;">{{ $notifications->links() }}</span>
            @endif

        </div>

    </div>

    <x-footer/>

</body>

</html>
