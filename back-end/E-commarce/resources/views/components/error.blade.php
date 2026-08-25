@if (session('success'))
    <br>
    <div id="successMessage" class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-white p-4 shadow-xl shadow-emerald-100 transition-all duration-500 mx-4">

        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">
            <span class="h-5 w-5">
                ⛔
            </span>
        </div>

        <div class="min-w-0 flex-1">
            <p class="text-sm font-black text-red-900">
            حدث خطأ
            </p>
            <p class="mt-1 text-xs leading-5 text-red-500">
                {{ session('error') }}
            </p>
        </div>

        <button type="button" onclick="this.parentElement.remove()"
            class="flex pt-3 h-7 w-7 shrink-0 items-center justify-center rounded-lg text-gray-400 transition  hover:text-gray-700">

            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                <path d="M6 6l12 12" />
                <path d="M18 6 6 18" />

            </svg>

        </button>

    </div>
@endif