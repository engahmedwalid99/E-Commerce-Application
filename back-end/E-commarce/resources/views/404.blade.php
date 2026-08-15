<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة غير موجودة | {{ env('APP_NAME') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700;800;900&family=Cairo:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --navy: #12162B;
            --navy-2: #1B2140;
            --gold: #D4AF37;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Cairo', sans-serif;
            background: radial-gradient(circle at 75% 20%, var(--navy-2), var(--navy) 65%);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cg fill='none' stroke='%23D4AF37' stroke-width='0.6' opacity='0.15'%3E%3Cpath d='M60 0 L90 30 L60 60 L30 30 Z'/%3E%3Cpath d='M60 60 L90 90 L60 120 L30 90 Z'/%3E%3Cpath d='M0 60 L30 30 L60 60 L30 90 Z'/%3E%3Cpath d='M60 60 L90 30 L120 60 L90 90 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 120px 120px;
        }

        .card {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .1);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-radius: 24px;
            padding: 48px 40px;
            text-align: center;
            max-width: 440px;
            width: 100%;
            box-shadow: 0 30px 60px rgba(0, 0, 0, .35);
        }

        .code {
            font-family: 'Cairo', sans-serif;
            font-weight: 900;
            font-size: 96px;
            line-height: 1;
            background: linear-gradient(135deg, var(--gold), #F3E7C9);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 6px;
        }

        .icon-wrap {
            width: 76px;
            height: 76px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: rgba(212, 175, 55, .12);
            border: 1px solid rgba(212, 175, 55, .3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-wrap svg {
            width: 34px;
            height: 34px;
            color: var(--gold);
        }

        h1 {
            font-size: 22px;
            font-weight: 800;
            margin: 0 0 12px;
            color: #fff;
        }

        p {
            font-size: 14.5px;
            line-height: 1.9;
            color: #C7CADA;
            margin: 0 0 30px;
        }

        .btn-gold {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: var(--gold);
            color: var(--navy);
            padding: 14px 30px;
            border-radius: 12px;
            font-weight: 800;
            font-size: 14.5px;
            width: 100%;
            transition: transform .12s, box-shadow .12s;
        }

        .btn-gold:hover {
            transform: scale(1.03);
        }

        .btn-gold svg {
            width: 16px;
            height: 16px;
        }

        .divider {
            width: 44px;
            height: 3px;
            background: var(--gold);
            border-radius: 100px;
            margin: 22px auto;
            opacity: .6;
        }

        .support-note {
            font-size: 12px;
            color: #9297AC;
        }

        .support-note a {
            color: var(--gold);
            font-weight: 700;
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="code">404</div>

        <div class="icon-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <circle cx="11" cy="11" r="7" />
                <path stroke-linecap="round" d="m20 20-3.5-3.5M9 8l4 4m0-4-4 4" />
            </svg>
        </div>

        <h1 class="my-5 text-red-500">الصفحة غير موجودة</h1>

        <p>
            عذرًا، الصفحة التي تبحث عنها غير موجودة أو تم نقلها.
            <br>
            تأكد من الرابط أو ارجع للصفحة الرئيسية.
        </p>

        <a href="{{ route('home') }}" class="btn-gold mt-3">
            العودة للصفحة الرئيسية
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M19 12H5" />
                <path d="m11 18-6-6 6-6" />
            </svg>
        </a>

        <div class="divider"></div>

    </div>

</body>

</html>