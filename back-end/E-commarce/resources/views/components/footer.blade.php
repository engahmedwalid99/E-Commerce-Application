<footer class="border-t border-[#e8e1d2] bg-[#172033] text-white">
    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">

        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-12">

            <div class="sm:col-span-2 lg:col-span-1">

                <a href="{{ url('/') }}" class="inline-block text-2xl font-extrabold tracking-wide text-white">
                    <span>{{ env('APP_NAME') }}</span>
                </a>

                <p class="mt-5 max-w-sm text-sm leading-7 text-gray-300">
                    متجرك الموثوق للتسوق أونلاين، نوفر لك أفضل المنتجات من
                    ماركات عالمية ومحلية بأسعار تنافسية وتجربة شراء سلسة.
                </p>


                <div class="mt-6 flex items-center gap-3">

                    <a href="https://wa.me/201023046551" target="_blank" rel="noopener noreferrer"
                        aria-label="WhatsApp"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 text-gray-300 transition hover:border-[#25D366] hover:bg-[#25D366] hover:text-white">
                    
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.52 3.48A11.87 11.87 0 0 0 12.06 0C5.5 0 .16 5.34.16 11.9c0 2.1.55 4.15 1.59 5.96L.06 24l6.28-1.65a11.9 11.9 0 0 0 5.71 1.46h.01c6.56 0 11.9-5.34 11.9-11.9 0-3.18-1.24-6.16-3.44-8.43ZM12.06 21.8h-.01a9.9 9.9 0 0 1-5.05-1.38l-.36-.21-3.73.98.99-3.64-.23-.37a9.9 9.9 0 0 1-1.52-5.28C2.15 6.42 6.59 1.98 12.06 1.98c2.65 0 5.14 1.03 7.01 2.91a9.86 9.86 0 0 1 2.9 7.02c0 5.47-4.44 9.89-9.91 9.89Zm5.42-7.4c-.3-.15-1.77-.87-2.05-.97-.28-.1-.48-.15-.68.15-.2.3-.78.97-.96 1.17-.18.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.75-1.64-2.05-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.68-1.64-.93-2.25-.25-.59-.5-.51-.68-.52h-.58c-.2 0-.52.07-.8.37-.27.3-1.04 1.02-1.04 2.49s1.07 2.89 1.22 3.09c.15.2 2.1 3.2 5.09 4.49.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35Z" />
                        </svg>
                    </a>


                    <a href="https://x.com/ahm3d_walid" aria-label="Twitter"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 text-gray-300 transition hover:border-[#b8912b] hover:bg-[#b8912b] hover:text-white">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">

                            <path
                                d="M22 5.9c-.7.3-1.5.5-2.3.6.8-.5 1.5-1.3 1.8-2.3-.8.5-1.7.8-2.6 1a4.1 4.1 0 0 0-7 3.7A11.6 11.6 0 0 1 3.4 4.6a4.1 4.1 0 0 0 1.3 5.5c-.7 0-1.3-.2-1.9-.5v.1a4.1 4.1 0 0 0 3.3 4 4.2 4.2 0 0 1-1.8.1 4.1 4.1 0 0 0 3.8 2.9A8.3 8.3 0 0 1 2 18.6a11.6 11.6 0 0 0 6.3 1.8c7.5 0 11.6-6.2 11.6-11.6v-.5c.8-.6 1.5-1.3 2.1-2.1Z" />

                        </svg>

                    </a>


                    <a href="https://www.facebook.com/share/199f5Uc6kz/" aria-label="Facebook"
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 text-gray-300 transition hover:border-[#b8912b] hover:bg-[#b8912b] hover:text-white">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">

                            <path
                                d="M22 12c0-5.5-4.5-10-10-10S2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7C18.3 21.1 22 17 22 12z" />

                        </svg>

                    </a>

                </div>

            </div>


            <div>

                <h4 class="mb-5 text-base font-bold text-white">
                    تسوّق
                </h4>

                <ul class="space-y-4 text-sm">

                    <li>
                        <a href="{{ route('all_products') }}" class="text-gray-300 transition hover:text-[#b8912b]">
                            كل المنتجات
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('all_products') }}" class="text-gray-300 transition hover:text-[#b8912b]">
                            الأكثر مبيعًا
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('all_products') }}" class="text-gray-300 transition hover:text-[#b8912b]">
                            وصل حديثًا
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-gray-300 transition hover:text-[#b8912b]">
                            العروض والخصومات
                        </a>
                    </li>

                </ul>

            </div>


            <div>

                <h4 class="mb-5 text-base font-bold text-white">
                    خدمة العملاء
                </h4>

                <ul class="space-y-4 text-sm">

                    <li>
                        <a href="{{ route('return.policy') }}" class="hover:text-blue-500 transition">
                            سياسة الإرجاع
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('shipping') }}" class="hover:text-blue-500 transition">
                            الشحن والتوصيل
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('faq') }}" class="hover:text-blue-500 transition">
                            الأسئلة الشائعة
                        </a>
                    </li>

                </ul>

            </div>


            <div>

                <h4 class="mb-5 text-base font-bold text-white">
                    الشركة
                </h4>

                <ul class="space-y-4 text-sm">

                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-300 transition hover:text-[#b8912b]">
                            تواصل معنا
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('terms') }}" class="text-gray-300 transition hover:text-[#b8912b]">
                            الشروط والأحكام
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('privacy') }}" class="text-gray-300 transition hover:text-[#b8912b]">
                            سياسة الخصوصية
                        </a>
                    </li>

                </ul>

            </div>

        </div>


        <div
            class="mt-12 flex flex-col gap-4 border-t border-white/10 pt-6 text-sm md:flex-row md:items-center md:justify-between">

            <span class="text-gray-400">
                © {{ date('Y') }} {{ env('APP_NAME') }}. جميع الحقوق محفوظة.
            </span>

            <div class="text-gray-400">

                Developed by

                <a href="https://wa.me/+1023046551" target="_blank" class="font-bold text-[#b8912b] transition hover:text-[#d4af55]">
                    Eng.Ahmed Walid
                </a>

            </div>

        </div>

    </div>
</footer>
