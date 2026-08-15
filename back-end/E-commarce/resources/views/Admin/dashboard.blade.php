<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'لوحة التحكم') |
        {{ env('APP_NAME', 'ديوان') }}
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Tajawal:wght@500;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Cairo', sans-serif;
        }

        ::-webkit-scrollbar {
            display: none !important;
        }
    </style>

    @yield('extra-style')
</head>


<body class="bg-slate-50 text-slate-900">

    <div class="min-h-screen">
        <div id="sidebar-overlay" class="fixed inset-0 z-40 hidden bg-slate-950/50 backdrop-blur-sm lg:hidden">
        </div>
        <aside id="admin-sidebar"
            class="fixed inset-y-0 right-0 z-50 flex w-[250px] translate-x-full flex-col border-l border-white/10 bg-[#111827] text-white shadow-2xl transition-transform duration-300 lg:translate-x-0">


            <div class="flex h-20 items-center justify-between border-b border-white/10 px-5">

                <a href="{{ route('home') }}" class="flex items-center gap-3">

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-amber-300 to-amber-600 shadow-lg shadow-amber-500/20">

                        <svg class="h-6 w-6 text-slate-900" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">

                            <path d="M12 3v18" />
                            <path d="M5 7h14" />
                            <path d="M7 7l-3 7h6L7 7Z" />
                            <path d="M17 7l-3 7h6l-3-7Z" />

                        </svg>

                    </div>

                    <div>
                        <h2 class="text-lg font-black text-white">
                            {{ env('APP_NAME', 'ديوان') }}
                        </h2>

                        <p class="text-[11px] text-slate-400">
                            لوحة التحكم
                        </p>
                    </div>

                </a>



                <button id="close-sidebar"
                    class="flex h-9 w-9 items-center justify-center rounded-xl text-slate-400 transition hover:bg-white/10 hover:text-white lg:hidden">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />

                    </svg>

                </button>

            </div>



            <div class="mx-4 mt-5 rounded-2xl border border-white/10 bg-white/[0.04] p-4">

                <div class="flex items-center gap-3">

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-400 font-black text-slate-900">

                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}

                    </div>

                    <div class="min-w-0">

                        <p class="truncate text-sm font-bold text-white">
                            {{ auth()->user()->name ?? 'مدير النظام' }}
                        </p>

                        <p class="truncate text-[11px] text-slate-400">
                            {{ auth()->user()->email ?? 'admin@example.com' }}
                        </p>

                    </div>

                </div>

            </div>



            <nav class="mt-6 flex-1 overflow-y-auto px-4 pb-5">
                <p class="mb-3 px-3 text-[10px] font-bold tracking-wider text-slate-500">
                    الرئيسية
                </p>
                <div class="space-y-1">

                    <a href="{{ route('content') }}"
                        class="group flex items-center gap-3 rounded-xl bg-amber-400 px-4 py-3 text-sm font-bold text-slate-900 shadow-lg shadow-amber-500/10">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                            <rect x="3" y="3" width="7" height="7" rx="1" />
                            <rect x="14" y="3" width="7" height="7" rx="1" />
                            <rect x="3" y="14" width="7" height="7" rx="1" />
                            <rect x="14" y="14" width="7" height="7" rx="1" />

                        </svg>

                        الرئيسية

                    </a>

                </div>



                <p class="mb-3 mt-7 px-3 text-[10px] font-bold tracking-wider text-slate-500">
                    المتجر
                </p>

                <div class="space-y-1">

                    <a href="{{ route('add_product') }}"
                        class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-white/5 hover:text-white">

                        <svg class="h-5 w-5 text-slate-400 group-hover:text-amber-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.8">

                            <path d="M4 7h16v13H4z" />
                            <path d="m4 7 3-3h10l3 3" />

                            <path d="M12 10v6" />
                            <path d="M9 13h6" />
                        </svg>
                        <span>أضافه منتج</span>
                    </a>

                    <a href="{{ route('show_products') }}"
                        class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-white/5 hover:text-white">

                        <svg class="h-5 w-5 text-slate-400 group-hover:text-amber-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.8">

                            <path d="m3 7 3-3h12l3 3" />
                            <path d="M4 7h16v13H4z" />
                            <path d="M9 11h6" />

                        </svg>
                        <span>المنتجات</span>
                    </a>

                    <a href="{{ route('admin.orders.index') }}"
                        class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-white/5 hover:text-white">
                        <svg class="h-5 w-5 text-slate-400 group-hover:text-amber-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6" />
                        </svg>
                        <span>الطلبات</span>
                    </a>
                    <a href="{{ route('view_add_notification') }}"
                        class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-white/5 hover:text-white">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round">

                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                            <path d="M10 21h4" />

                            <path d="M19 3v4" />
                            <path d="M17 5h4" />

                        </svg>

                        أضافه أشعار
                    </a>

                    <a href="{{ route('adminNotification') }}"
                        class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-white/5 hover:text-white">

                        <svg class="h-5 w-5 text-slate-400 group-hover:text-amber-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                            <path d="M10 21h4" />
                        </svg>

                        الإشعارات
                    </a>
                </div>

                <p class="mb-3 mt-7 px-3 text-[10px] font-bold tracking-wider text-slate-500">
                    المستخدمون
                </p>

                <div class="space-y-1">

                    <a href="{{ route('view.users') }}"
                        class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-white/5 hover:text-white">

                        <svg class="h-5 w-5 text-slate-400 group-hover:text-amber-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.8">

                            <circle cx="9" cy="8" r="3.5" />
                            <path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6" />
                            <path d="M17 4.5a3.5 3.5 0 0 1 0 7" />

                        </svg>
                        المستخدمون
                    </a>

                </div>

            </nav>
            <div class="border-t border-white/10 p-4">


                <form action="{{ route('logout') }}" method="POST">

                            @csrf

                            <button type="submit"
                                class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-sm text-red-600 transition hover:bg-red-50">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.7">
                                    <path d="M10 17l5-5-5-5" />
                                    <path d="M15 12H3" />
                                    <path d="M21 19V5a2 2 0 0 0-2-2h-6" />
                                </svg>

                                تسجيل الخروج
                            </button>

                        </form>


            </div>

        </aside>

        <main class="min-h-screen lg:mr-72">


            <header
                class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 px-4 py-4 backdrop-blur-xl sm:px-6 lg:px-8">

                <div class="flex items-center justify-between gap-4">


                    <div class="flex items-center gap-3">


                        <button id="open-sidebar"
                            class="flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:bg-slate-50 lg:hidden">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <path d="M4 6h16" />
                                <path d="M4 12h16" />
                                <path d="M4 18h16" />

                            </svg>

                        </button>


                        <div>

                            <h1 class="text-lg font-black text-slate-900 sm:text-xl">
                                @yield('page-title', 'لوحة التحكم')
                            </h1>

                            <p class="hidden text-xs text-slate-500 sm:block">
                                @yield('page-subtitle', 'نظرة عامة على أداء المتجر اليوم')
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('all_notification') }}">
                            <button
                                class="relative flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 transition hover:bg-slate-50 hover:text-slate-900">

                                <span
                                    class="absolute right-2 top-2 h-2 w-2 rounded-full border-2 border-white bg-red-500">
                                </span>

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">

                                    <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
                                    <path d="M10 21h4" />

                                </svg>

                            </button>
                        </a>

                        <a href="{{ route('home') }}"
                            class="hidden h-10 items-center gap-2 rounded-xl bg-slate-900 px-4 text-xs font-bold text-white transition hover:bg-slate-800 sm:flex">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <path d="m3 10 9-7 9 7" />
                                <path d="M5 9v11h14V9" />

                            </svg>

                            زيارة المتجر

                        </a>

                    </div>

                </div>

            </header>


            <section class="p-4 sm:p-6 lg:p-8">

                @yield('content')
                @yield('add_product')
                @yield('products')
                @yield('edit_product')
                @yield('category')
                @yield('admin_orders_index')
                @yield('admin_orders_show')
                @yield('users')
                @yield('notifications')
                @yield('adminNotification')
                @yield('editNotification')
            </section>

        </main>

    </div>


    <script>
        const sidebar = document.getElementById('admin-sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        const openSidebar = document.getElementById('open-sidebar');
        const closeSidebar = document.getElementById('close-sidebar');


        function openMenu() {

            sidebar.classList.remove('translate-x-full');

            overlay.classList.remove('hidden');

            document.body.classList.add('overflow-hidden');

        }


        function closeMenu() {

            sidebar.classList.add('translate-x-full');

            overlay.classList.add('hidden');

            document.body.classList.remove('overflow-hidden');

        }


        openSidebar?.addEventListener('click', openMenu);

        closeSidebar?.addEventListener('click', closeMenu);

        overlay?.addEventListener('click', closeMenu);


        window.addEventListener('resize', () => {

            if (window.innerWidth >= 1024) {

                overlay.classList.add('hidden');

                sidebar.classList.remove('translate-x-full');

                document.body.classList.remove('overflow-hidden');

            } else {

                sidebar.classList.add('translate-x-full');

            }

        });
    </script>

    @yield('scripts')
</body>

</html>
