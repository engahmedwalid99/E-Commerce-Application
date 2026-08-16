<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700;800;900&family=Cairo:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --navy: #12162B;
            --navy-2: #1B2140;
            --gold: #D4AF37;
            --gold-soft: rgba(212, 175, 55, .15);
            --cream: #FAFAF8;
            --ink: #12162B;
            --muted: #767B8C;
            --line: #E7E5E0;
            --danger: #D64545;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Cairo', sans-serif;
            background: var(--cream);
            color: var(--ink);
        }

        .wrap {
            direction: ltr;
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            min-height: 100vh;
        }

        .brand {
            direction: rtl;
            position: sticky;
            top: 0;
            height: 100vh;
            background: radial-gradient(circle at 20% 15%, var(--navy-2), var(--navy) 60%);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 56px 48px;
            overflow: hidden;
        }

        .brand::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cg fill='none' stroke='%23D4AF37' stroke-width='0.6' opacity='0.18'%3E%3Cpath d='M60 0 L90 30 L60 60 L30 30 Z'/%3E%3Cpath d='M60 60 L90 90 L60 120 L30 90 Z'/%3E%3Cpath d='M0 60 L30 30 L60 60 L30 90 Z'/%3E%3Cpath d='M60 60 L90 30 L120 60 L90 90 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 120px 120px;
            pointer-events: none;
        }

        .brand-top,
        .brand-mid,
        .brand-bottom {
            position: relative;
            z-index: 1;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Tajawal', sans-serif;
            font-weight: 800;
            font-size: 20px;
            letter-spacing: .3px;
        }

        .logo-mark {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: linear-gradient(135deg, var(--gold), #8a6d1c);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            color: var(--navy);
            font-size: 16px;
        }

        .brand-mid {
            max-width: 420px;
            margin-top: auto;
            margin-bottom: auto;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--gold);
            background: var(--gold-soft);
            border: 1px solid rgba(212, 175, 55, .35);
            padding: 6px 14px;
            border-radius: 100px;
            margin-bottom: 22px;
        }

        .brand-mid h1 {
            font-family: 'Tajawal', sans-serif;
            font-weight: 900;
            font-size: 38px;
            line-height: 1.35;
            margin: 0 0 18px;
        }

        .brand-mid h1 span {
            color: var(--gold);
        }

        .brand-mid p {
            font-size: 15.5px;
            line-height: 1.9;
            color: #C7CADA;
            margin: 0;
        }

        .checklist {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .checklist div {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #DEE0EC;
        }

        .checklist div i {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--gold-soft);
            border: 1px solid rgba(212, 175, 55, .4);
            color: var(--gold);
            font-style: normal;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            flex-shrink: 0;
        }

        .brand-bottom {
            font-size: 13px;
            color: #8489A0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-bottom a {
            color: #C7CADA;
            text-decoration: none;
        }

        .panel {
            direction: rtl;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 60px 24px;
            background: #fff;
        }

        .card {
            width: 100%;
            max-width: 400px;
        }

        .card h2 {
            font-family: 'Tajawal', sans-serif;
            font-weight: 800;
            font-size: 28px;
            margin: 0 0 6px;
        }

        .card .sub {
            color: var(--muted);
            font-size: 14.5px;
            margin: 0 0 26px;
        }

        .card .sub a {
            color: var(--navy);
            font-weight: 700;
            text-decoration: none;
            border-bottom: 1.5px solid var(--gold);
        }

        .field {
            margin-bottom: 16px;
        }

        .field label {
            display: block;
            font-size: 13.5px;
            font-weight: 600;
            margin-bottom: 7px;
            color: var(--ink);
        }

        .field input[type=email],
        .field input[type=password],
        .field input[type=text] {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid var(--line);
            border-radius: 11px;
            font-family: 'Cairo', sans-serif;
            font-size: 14.5px;
            outline: none;
            transition: border-color .15s, box-shadow .15s;
            background: #FCFCFB;
        }

        .field input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px var(--gold-soft);
            background: #fff;
        }

        .field .error {
            color: var(--danger);
            font-size: 12.5px;
            margin-top: 6px;
        }

        .terms {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            font-size: 13px;
            color: var(--muted);
            line-height: 1.6;
            margin: 6px 0 22px;
        }

        .terms input {
            width: 16px;
            height: 16px;
            accent-color: var(--gold);
            margin-top: 2px;
            flex-shrink: 0;
        }

        .terms a {
            color: var(--navy);
            font-weight: 600;
            text-decoration: none;
            border-bottom: 1px solid var(--gold);
        }

        .btn-primary {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 11px;
            background: var(--navy);
            color: #fff;
            font-family: 'Cairo', sans-serif;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: background .15s, transform .1s;
        }

        .btn-primary:hover {
            background: #000;
        }

        .btn-primary:active {
            transform: scale(.99);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 26px 0 20px;
            color: var(--muted);
            font-size: 13px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: var(--line);
        }

        .socials {
            display: flex;
            flex-direction: row;
            gap: 12px;
        }

        @media (max-width: 480px) {
            .socials {
                flex-direction: column;
            }
        }

        .btn-social {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 11px;
            border-radius: 11px;
            border: 1.5px solid var(--line);
            background: #fff;
            font-family: 'Cairo', sans-serif;
            font-weight: 600;
            font-size: 14.5px;
            color: var(--ink);
            text-decoration: none;
            cursor: pointer;
            transition: border-color .15s, background .15s;
        }

        .btn-social:hover {
            border-color: var(--navy);
            background: #FAFAF8;
        }

        .btn-social svg {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
        }

        @media (max-width: 880px) {
            .wrap {
                grid-template-columns: 1fr;
            }

            .brand {
                display: none;
            }

            .panel {
                padding: 32px 18px;
            }
        }
    </style>
</head>

<body>

    <x-navbar/>

    <div class="wrap">

        <aside class="brand">
            <div class="brand-top">
                <div class="logo">
                    <span class="logo-mark">{{ substr(env('APP_NAME'), 0, 1) }}</span>
                    <span>{{ env('APP_NAME') }}</span>
                </div>
            </div>

            <div class="brand-mid">

                <span class="eyebrow">✦ أهلاً بعودتك</span>

                <h1>
                    سجّل دخولك وابدأ <span>من حيث توقفت</span>
                </h1>

                <p>
                    ادخل إلى حسابك واستمتع بتجربة بسيطة وسريعة،
                    مع أدواتك وبياناتك في مكان واحد.
                </p>

                <div class="checklist">

                    <div>
                        <i>✓</i>
                        تسجيل دخول سريع وآمن
                    </div>

                    <div>
                        <i>✓</i>
                        حماية كاملة لبياناتك
                    </div>

                    <div>
                        <i>✓</i>
                        حسابك متاح لك في أي وقت
                    </div>

                </div>

            </div>

            <div class="brand-bottom">
                <span>© {{ date('Y') }} منصّتك. جميع الحقوق محفوظة.</span>
                <a href="{{ route('contact') }}">تحتاج مساعدة؟</a>
            </div>
        </aside>

        <section class="panel">

            <div class="fixed left-5 top-5 z-[9999] w-[calc(100%-40px)] max-w-sm space-y-3">

                @if (session('error'))
                    <div id="errorMessage"
                        class="flex items-start gap-3 rounded-2xl border border-red-200 bg-white p-4 shadow-xl shadow-red-100 transition-all duration-500">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 text-red-600">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 8v4" />
                                <path d="M12 16h.01" />

                            </svg>

                        </div>

                        <button type="button" onclick="this.parentElement.remove()"
                            class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-gray-400 transition hover:bg-gray-100 hover:text-gray-700">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <path d="M6 6l12 12" />
                                <path d="M18 6 6 18" />

                            </svg>

                        </button>

                    </div>
                @endif


                @if (session('success'))
                    <div id="successMessage"
                        class="flex items-start gap-3 rounded-2xl border border-emerald-200 bg-white p-4 shadow-xl shadow-emerald-100 transition-all duration-500">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <path d="M20 6 9 17l-5-5" />

                            </svg>

                        </div>

                        <button type="button" onclick="this.parentElement.remove()"
                            class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg text-gray-400 transition hover:bg-gray-100 hover:text-gray-700">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">

                                <path d="M6 6l12 12" />
                                <path d="M18 6 6 18" />

                            </svg>

                        </button>

                    </div>
                @endif

            </div>


            <script>
                setTimeout(() => {

                    const messages = [
                        document.getElementById('errorMessage'),
                        document.getElementById('successMessage')
                    ];

                    messages.forEach(message => {

                        if (message) {

                            message.classList.add(
                                'opacity-0',
                                'translate-x-5'
                            );

                            setTimeout(() => {
                                message.remove();
                            }, 500);

                        }

                    });

                }, 4000);
            </script>
            <div class="card">
                <h2>تسجيل الدخول</h2>
                <p class="sub">
                    ليس لديك حساب؟
                    <a href="{{ route('register') }}">أنشئ حسابًا</a>
                </p>

                @if (session('error'))
                    <div
                        class="mb-5 flex items-center gap-3 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm font-semibold text-red-700">
                
                        <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                        </svg>
                
                        <span>
                            {{ session('error') }}
                        </span>
                    </div>
                @endif
                    
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="field">
                        <label for="email">البريد الإلكتروني</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                            placeholder="example@email.com" autocomplete="username">
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password">كلمة المرور</label>
                        <input id="password" type="password" name="password" placeholder="••••••••"
                            autocomplete="new-password">
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <label class="terms">
                        <input type="checkbox" name="terms">
                        <span>
                            أوافق على <a href="{{ route('terms') }}">شروط الاستخدام</a> 
                            و <a href="{{ route('privacy') }}">سياسة الخصوصية</a>
                        </span>
                    </label>

                    <div class="field">
                        <div class="g-recaptcha" style="margin-bottom: 10px" data-sitekey="{{ env('SITE_KEY') }}">
                        </div>
                        @error('g-recaptcha-response')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary">الدخول</button>
                </form>
                <div class="divider">أو أنضم بواسطه</div>
                <div class="socials">
                    <a href="{{ route('google.redirect') }}" class="btn-social">
                        <svg viewBox="0 0 24 24">
                            <path fill="#EA4335"
                                d="M12 10.2v3.9h5.5c-.24 1.3-1.7 3.8-5.5 3.8-3.3 0-6-2.7-6-6.1s2.7-6.1 6-6.1c1.9 0 3.15.8 3.88 1.5l2.6-2.5C16.9 3 14.7 2 12 2 6.9 2 2.8 6.1 2.8 11.8 S6.9 21.6 12 21.6c6.9 0 9.4-4.8 9.4-7.3 0-.5-.05-.9-.13-1.3H12z" />
                        </svg>
                        المتابعة عبر Google
                    </a>
                    <a href="{{ route('github.redirect') }}" class="btn-social">
                        <svg viewBox="0 0 24 24">
                            <path fill="#181717"
                                d="M12 2C6.48 2 2 6.58 2 12.25c0 4.53 2.87 8.37 6.84 9.73.5.1.68-.22.68-.5 0-.24-.01-.87-.01-1.71-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.5-1.11-1.5-.9-.64.07-.63.07-.63 1 .07 1.53 1.05 1.53 1.05.9 1.57 2.34 1.12 2.91.86.09-.66.35-1.12.63-1.38-2.22-.26-4.56-1.14-4.56-5.07 0-1.12.39-2.04 1.03-2.76-.1-.26-.45-1.32.1-2.75 0 0 .84-.28 2.75 1.05a9.3 9.3 0 0 1 5 0c1.9-1.33 2.75-1.05 2.75-1.05.55 1.43.2 2.49.1 2.75.64.72 1.03 1.64 1.03 2.76 0 3.94-2.34 4.8-4.57 5.06.36.32.68.94.68 1.9 0 1.37-.01 2.47-.01 2.81 0 .27.18.6.69.5A10.26 10.26 0 0 0 22 12.25C22 6.58 17.52 2 12 2z" />
                        </svg>
                        المتابعة عبر GitHub
                    </a>
                </div>
            </div>
        </section>
    </div>

    <x-footer/>
</body>
</html>
