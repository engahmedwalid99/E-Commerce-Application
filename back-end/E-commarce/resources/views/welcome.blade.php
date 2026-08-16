<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | متجرك المفضل للتسوق أونلاين</title>
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
            --gold-soft: rgba(212, 175, 55, .15);
            --cream: #FAFAF8;
            --ink: #12162B;
            --muted: #767B8C;
            --line: #E7E5E0;
            --danger: #D64545;
            --ok: #1E7A38;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Cairo', sans-serif;
            background: var(--cream);
            color: var(--ink);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
        }

        h1,
        h2,
        h3 {
            font-family: 'Cairo', sans-serif;
            margin: 0;
        }

        .announce {
            background: var(--navy);
            color: #EDEEF5;
            font-size: 13px;
            text-align: center;
            padding: 9px 16px;
        }

        .announce b {
            color: var(--gold);
        }


        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;

            width: 100%;

            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border-bottom: 1px solid #e9e9e9;
        }



        @media (max-width: 1100px) {

            .main-navigation {
                display: none;
            }

            .search-wrapper {
                width: 240px;
            }

            .mobile-menu-btn {
                display: block;
            }
        }

        @media (max-width: 750px) {

            .nav-container {
                min-height: 70px;

                padding: 0 15px;

                gap: 8px;
            }

            .brand-info {
                display: none;
            }

            .brand-icon {
                width: 42px;
                height: 42px;
            }

            .search-wrapper {
                display: none;
            }

            .nav-actions {
                margin-right: auto;
            }

            .nav-action {
                width: 40px;
                height: 40px;
            }

            .account-text,
            .arrow-icon {
                display: none;
            }

            .account-btn {
                width: 42px;
                height: 42px;

                justify-content: center;

                padding: 3px;
            }

            .avatar {
                width: 34px;
                height: 34px;
            }

            .account-dropdown {
                right: auto;
                left: -100px;
            }

            .mobile-menu {
                display: block;
            }
        }

        @media (max-width: 430px) {

            .nav-container {
                padding: 0 10px;
            }

            .nav-action:nth-child(1) {
                display: none;
            }

            .login-btn {
                padding: 0 12px;
                font-size: 11px;
            }
        }

        .hero {
            position: relative;
            background: radial-gradient(circle at 75% 20%, var(--navy-2), var(--navy) 65%);
            color: #fff;
            height: 90vh;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cg fill='none' stroke='%23D4AF37' stroke-width='0.6' opacity='0.15'%3E%3Cpath d='M60 0 L90 30 L60 60 L30 30 Z'/%3E%3Cpath d='M60 60 L90 90 L60 120 L30 90 Z'/%3E%3Cpath d='M0 60 L30 30 L60 60 L30 90 Z'/%3E%3Cpath d='M60 60 L90 30 L120 60 L90 90 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 120px 120px;
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            align-items: center;
            gap: 40px;
            padding: 78px 24px 90px;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            text-align: center;
            gap: 8px;
            font-size: 13px;
            color: var(--gold);
            background: var(--gold-soft);
            border: 1px solid rgba(212, 175, 55, .35);
            padding: 6px 14px;
            border-radius: 100px;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-weight: 900;
            font-size: 46px;
            line-height: 1.3;
            margin-bottom: 18px;
        }

        .hero h1 span {
            color: var(--gold);
        }

        .hero p {
            font-size: 16px;
            line-height: 1.9;
            color: #C7CADA;
            max-width: 480px;
            margin-bottom: 32px;
        }

        .hero-ctas {
            display: flex;
            gap: 14px;
        }

        .btn-gold {
            background: var(--gold);
            color: var(--navy);
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 800;
            font-size: 14.5px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: transform .12s, box-shadow .12s;
        }

        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(212, 175, 55, .28);
        }

        .btn-outline-light {
            border: 1.5px solid rgba(255, 255, 255, .3);
            color: #fff;
            padding: 14px 26px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14.5px;
        }

        .btn-outline-light:hover {
            border-color: #fff;
        }

        .hero-visual {
            position: relative;
            height: 380px;
        }

        .float-card {
            position: absolute;
            background: #fff;
            color: var(--ink);
            border-radius: 16px;
            padding: 16px 18px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .25);
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 13px;
        }

        .float-card b {
            display: block;
            font-size: 15px;
            font-family: 'Cairo', sans-serif;
        }

        .fc-1 {
            top: 10px;
            right: 20px;
        }

        .fc-2 {
            bottom: 30px;
            left: 0px;
        }

        .fc-swatch {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            flex-shrink: 0;
        }

        .hero-blob {
            position: absolute;
            inset: 60px 60px 60px 100px;
            border-radius: 32px;
            background: linear-gradient(160deg, #22283f, #161a2c);
            border: 1px solid rgba(212, 175, 55, .25);
        }

        .trust-bar {
            background: #fff;
            border-bottom: 1px solid var(--line);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            padding: 26px 24px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .trust-item .ic {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            background: var(--gold-soft);
            color: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .trust-item .ic svg {
            width: 21px;
            height: 21px;
        }

        .trust-item b {
            display: block;
            font-size: 14px;
        }

        .trust-item span {
            font-size: 12.5px;
            color: var(--muted);
        }

        .section {
            padding: 64px 24px;
        }

        .section-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 34px;
        }

        .section-head .eyebrow {
            color: var(--gold);
            font-weight: 700;
            font-size: 13px;
            letter-spacing: .3px;
            display: block;
            margin-bottom: 8px;
        }

        .section-head h2 {
            font-size: 28px;
            font-weight: 800;
        }

        .section-head p {
            color: var(--muted);
            font-size: 14px;
            margin-top: 6px;
        }

        .link-all {
            font-weight: 700;
            font-size: 13.5px;
            color: var(--navy);
            border-bottom: 1.5px solid var(--gold);
            padding-bottom: 2px;
            white-space: nowrap;
        }

        .cat-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 16px;
        }

        .cat-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 22px 14px;
            text-align: center;
            transition: transform .15s, box-shadow .15s, border-color .15s;
        }

        .cat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 28px rgba(18, 22, 43, .08);
            border-color: var(--gold);
        }

        .cat-icon {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }

        .cat-icon svg {
            width: 24px;
            height: 24px;
        }

        .cat-card b {
            display: block;
            font-size: 13.5px;
        }

        .cat-card span {
            font-size: 11.5px;
            color: var(--muted);
        }

        .prod-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .prod-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 18px;
            overflow: hidden;
            transition: box-shadow .15s, transform .15s;
        }

        .prod-card:hover {
            box-shadow: 0 18px 36px rgba(18, 22, 43, .1);
            transform: translateY(-3px);
        }

        .prod-media {
            position: relative;
            aspect-ratio: 1/0.95;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .prod-media svg {
            width: 56px;
            height: 56px;
            opacity: .55;
        }

        .prod-tag {
            position: absolute;
            top: 12px;
            right: 12px;
            background: var(--navy);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 100px;
        }

        .prod-tag.sale {
            background: var(--danger);
        }

        .wish-btn {
            position: absolute;
            top: 12px;
            left: 12px;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        }

        .wish-btn svg {
            width: 16px;
            height: 16px;
            color: var(--ink);
        }

        .prod-body {
            padding: 16px 16px 18px;
        }

        .prod-cat {
            font-size: 11.5px;
            color: var(--muted);
            margin-bottom: 4px;
        }

        .prod-name {
            font-size: 14.5px;
            font-weight: 700;
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .prod-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 10px;
        }

        .prod-rating svg {
            width: 13px;
            height: 13px;
            color: var(--gold);
        }

        .prod-rating span {
            font-size: 11.5px;
            color: var(--muted);
        }

        .prod-foot {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .price {
            display: flex;
            align-items: baseline;
            gap: 7px;
        }

        .price b {
            font-size: 16.5px;
            font-family: 'Cairo', sans-serif;
        }

        .price s {
            font-size: 12.5px;
            color: var(--muted);
        }

        .add-btn {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: var(--navy);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .15s;
        }

        .add-btn:hover {
            background: var(--gold);
            color: var(--navy);
        }

        .add-btn svg {
            width: 17px;
            height: 17px;
        }

        .promo-split {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .promo-card {
            border-radius: 22px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            min-height: 220px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .promo-card .eyebrow {
            color: inherit;
            opacity: .85;
            font-size: 12.5px;
            font-weight: 700;
            margin-bottom: 10px;
            display: block;
        }

        .promo-card h3 {
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .promo-card p {
            font-size: 13.5px;
            opacity: .85;
            margin-bottom: 20px;
            max-width: 280px;
        }

        .promo-1 {
            background: linear-gradient(135deg, #1B2140, var(--navy));
            color: #fff;
        }

        .promo-2 {
            background: linear-gradient(135deg, #F3E7C9, #EAD9A0);
            color: var(--navy);
        }

        .promo-card .deco {
            position: absolute;
            left: -30px;
            bottom: -30px;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background: rgba(212, 175, 55, .12);
        }

        .promo-2 .deco {
            background: rgba(18, 22, 43, .06);
        }

        .btn-mini {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 800;
            width: fit-content;
        }

        .promo-1 .btn-mini {
            color: var(--gold);
        }

        .promo-2 .btn-mini {
            color: var(--navy);
            border-bottom: 1.5px solid var(--navy);
            padding-bottom: 2px;
        }

        .tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 30px;
            background: #F1F0EB;
            padding: 6px;
            border-radius: 100px;
            width: fit-content;
        }

        .tab {
            padding: 9px 20px;
            border-radius: 100px;
            font-size: 13.5px;
            font-weight: 700;
            color: var(--muted);
            cursor: pointer;
        }

        .tab.active {
            background: var(--navy);
            color: #fff;
        }

        .testi-strip {
            background: var(--navy);
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .testi-strip::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cg fill='none' stroke='%23D4AF37' stroke-width='0.6' opacity='0.12'%3E%3Cpath d='M60 0 L90 30 L60 60 L30 30 Z'/%3E%3Cpath d='M60 60 L90 90 L60 120 L30 90 Z'/%3E%3Cpath d='M0 60 L30 30 L60 60 L30 90 Z'/%3E%3Cpath d='M60 60 L90 30 L120 60 L90 90 Z'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 120px 120px;
        }

        .testi-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .testi-card {
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 16px;
            padding: 24px;
        }

        .testi-stars {
            display: flex;
            gap: 4px;
            margin-bottom: 14px;
        }

        .testi-stars svg {
            width: 14px;
            height: 14px;
            color: var(--gold);
        }

        .testi-card p {
            font-size: 13.5px;
            line-height: 1.85;
            color: #D6D8E4;
            margin-bottom: 16px;
        }

        .testi-who {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .testi-who .av {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gold-soft);
            color: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 13px;
        }

        .testi-who b {
            display: block;
            font-size: 13px;
        }

        .testi-who span {
            font-size: 11.5px;
            color: #9297AC;
        }

        .newsletter {
            background: linear-gradient(135deg, #F3E7C9, #EAD9A0);
            border-radius: 24px;
            padding: 48px;
            text-align: center;
            margin: 30px auto;
        }

        .newsletter h3 {
            font-size: 24px;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 8px;
        }

        .newsletter p {
            font-size: 14px;
            color: #5B4E22;
            margin-bottom: 26px;
        }

        .news-form {
            display: flex;
            gap: 10px;
            max-width: 440px;
            margin: 0 auto;
        }

        .news-form input {
            flex: 1;
            padding: 13px 18px;
            border-radius: 100px;
            border: 1.5px solid rgba(18, 22, 43, .15);
            outline: none;
            font-family: 'Cairo', sans-serif;
            font-size: 13.5px;
        }

        .news-form input:focus {
            border-color: var(--navy);
        }

        .news-form button {
            background: var(--navy);
            color: #fff;
            padding: 13px 26px;
            border-radius: 100px;
            border: none;
            font-weight: 700;
            font-size: 13.5px;
            cursor: pointer;
            white-space: nowrap;
        }

        footer.site {
            background: #0E1120;
            color: #9EA2B8;
            padding: 60px 24px 24px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        .footer-grid .logo {
            color: #fff;
            margin-bottom: 14px;
        }

        .footer-grid p {
            font-size: 13px;
            line-height: 1.9;
            max-width: 280px;
        }

        .footer-col h4 {
            color: #fff;
            font-family: 'Cairo', sans-serif;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .footer-col ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            gap: 11px;
        }

        .footer-col a {
            font-size: 13px;
            transition: color .15s;
        }

        .footer-col a:hover {
            color: var(--gold);
        }

        .social-row {
            display: flex;
            gap: 10px;
            margin-top: 16px;
        }

        .social-row a {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .06);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-row svg {
            width: 15px;
            height: 15px;
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 22px;
            font-size: 12.5px;
        }

        .footer-bottom .pay-icons {
            display: flex;
            gap: 8px;
        }

        .footer-bottom .pay-icons span {
            background: rgba(255, 255, 255, .06);
            padding: 5px 10px;
            border-radius: 6px;
            font-size: 11px;
        }

        @media (max-width: 1024px) {
            .prod-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .cat-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .trust-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }

            .hero-inner {
                grid-template-columns: 1fr;
            }

            .hero-visual {
                display: none;
            }

            .promo-split,
            .testi-grid {
                grid-template-columns: 1fr;
            }

            .main-nav,
            .search-box {
                display: none;
            }
        }
    </style>
</head>

<body>

    <x-navbar />

    <section class="hero">
        <div class="hero-inner container" style="grid-template-columns: 1fr; text-align: center; justify-items: center;">
            <div style="display:flex; flex-direction:column; align-items:center;">
                <span class="hero-eyebrow">
                    ✦ اختار اللي يناسبك
                </span>

                <h1>
                    كل اللي محتاجه <br>
                    <span>في مكان واحد</span>
                </h1>

                <p style="margin-left:auto; margin-right:auto; text-align:center;">
                    تصفّح مجموعة متنوعة من المنتجات، قارن الأسعار،
                    واختار اللي يناسبك بكل سهولة.
                </p>

                <div class="hero-ctas">

                    <a href="{{ route('all_products') }}" class="btn-gold">
                        تصفح المنتجات

                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2">

                            <path d="M5 12h14" />
                            <path d="m13 6 6 6-6 6" />

                        </svg>
                    </a>

                    <a href="#" class="btn-outline-light">
                        العروض
                    </a>

                </div>

            </div>

        </div>
    </section>

    <div class="trust-bar">
        <div class="trust-grid container">
            <div class="trust-item">
                <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 3h13v13H3zM16 8h5l3 4v4h-8V8Z" />
                        <circle cx="6.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg></div>
                <div><b>شحن سريع</b><span>خلال 2-4 أيام عمل</span></div>
            </div>
            <div class="trust-item">
                <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                    </svg></div>
                <div><b>دفع آمن 100%</b><span>حماية كاملة لبياناتك</span></div>
            </div>
            <div class="trust-item">
                <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 12a9 9 0 1 0 9-9" />
                        <path d="M3 4v8h8" />
                    </svg></div>
                <div><b>إرجاع سهل</b><span>خلال 14 يوم من الاستلام</span></div>
            </div>
            <div class="trust-item">
                <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path
                            d="M21 11.5a8.4 8.4 0 0 1-8.4 8.4 8.5 8.5 0 0 1-4.1-1L3 20l1.1-5.5A8.4 8.4 0 1 1 21 11.5Z" />
                    </svg></div>
                <div><b>دعم على مدار الساعة</b><span>نحن هنا لمساعدتك</span></div>
            </div>
        </div>
    </div>

    <section class="section container">
        <div class="section-head">
            <div>
                <span class="eyebrow">تصفح حسب الفئة</span>
                <h2>تسوّق حسب اهتمامك</h2>
            </div>
            <a href="{{ route('all_products') }}" class="link-all">عرض كل الفئات ←</a>
        </div>

        <div class="cat-grid">
            <a href="#" class="cat-card">
                <div class="cat-icon" style="background:#EFEAF9"><svg viewBox="0 0 24 24" fill="none"
                        stroke="#7C5CD6" stroke-width="1.8">
                        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                        <path d="M3 6h18M16 10a4 4 0 0 1-8 0" />
                    </svg></div>
                <b>الأزياء</b>
            </a>
            <a href="#" class="cat-card">
                <div class="cat-icon" style="background:#E7F2F9"><svg viewBox="0 0 24 24" fill="none"
                        stroke="#2C8AC2" stroke-width="1.8">
                        <rect x="4" y="2" width="16" height="20" rx="2" />
                        <path d="M9 18h6" />
                    </svg></div>
                <b>الإلكترونيات</b>
            </a>
            <a href="#" class="cat-card">
                <div class="cat-icon" style="background:#FBEFEA"><svg viewBox="0 0 24 24" fill="none"
                        stroke="#D06B3D" stroke-width="1.8">
                        <path d="M3 9h18M3 15h18" />
                        <rect x="3" y="4" width="18" height="16" rx="2" />
                    </svg></div>
                <b>المنزل والمطبخ</b>
            </a>
            <a href="#" class="cat-card">
                <div class="cat-icon" style="background:#EAF7EE"><svg viewBox="0 0 24 24" fill="none"
                        stroke="#2E9E52" stroke-width="1.8">
                        <circle cx="12" cy="8" r="5" />
                        <path d="M6 21v-4a6 6 0 0 1 12 0v4" />
                    </svg></div>
                <b>الجمال والعناية</b>
            </a>
            <a href="#" class="cat-card">
                <div class="cat-icon" style="background:#FBEFF4"><svg viewBox="0 0 24 24" fill="none"
                        stroke="#C24E80" stroke-width="1.8">
                        <path d="M12 22s8-4.5 8-11.8C20 5.6 16.4 2 12 2S4 5.6 4 10.2C4 17.5 12 22 12 22Z" />
                    </svg></div>
                <b>الرياضة</b>
            </a>
            <a href="#" class="cat-card">
                <div class="cat-icon" style="background:var(--gold-soft)"><svg viewBox="0 0 24 24" fill="none"
                        stroke="#B8912B" stroke-width="1.8">
                        <rect x="3" y="7" width="18" height="13" rx="2" />
                        <path d="M8 7V5a4 4 0 0 1 8 0v2" />
                    </svg></div>
                <b>حقائب وإكسسوارات</b>
            </a>
        </div>
    </section>

    <section class="section container" style="padding-top:0;">
        <div class="section-head">
            <div>
                <span class="eyebrow">مختارات هذا الأسبوع</span>
                <h2>منتجات مميزة</h2>
            </div>
            <a href="{{ route('all_products') }}" class="link-all">عرض الكل ←</a>
        </div>

        <div class="tabs">
            <div class="tab active">الأكثر مبيعًا</div>
        </div>

        <div class="prod-grid">
            @foreach ($products as $item)
                <div class="prod-card">
                    <a href="{{ route('product_details', $item->id) }}">
                        <div class="prod-media" style="background:#F3ECDD">
                            @if ($item->sale_price && $item->sale_price < $item->price)
                                <span class="prod-tag sale">
                                    خصم
                                    {{ round((($item->price - $item->sale_price) / $item->price) * 100) }}%
                                </span>
                            @endif
                            @if ($item->image)
                                <div style="overflow: hidden">
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                                </div>
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="#B8912B" stroke-width="1.4">
                                    <rect x="3" y="8" width="18" height="12" rx="2" />
                                    <path d="M8 8V6a4 4 0 0 1 8 0v2" />
                                </svg>
                            @endif
                        </div>
                        <div class="prod-body">
                            <div class="prod-cat">{{ $item->category_id }}</div>
                            <div class="prod-name">{{ $item->name }}</div>
                            <br>
                            <hr>
                            <div class="prod-foot">
                                <span class="text-l font-bold text-[#b08a35]">
                                    {{ number_format($item->sale_price ?? $item->price, 2) }}
                                </span>
                                <form action="{{ route('cart.add', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="add-btn cursor-pointer">

                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path d="M12 5v14M5 12h14" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section container" style="padding-top:0;">
        <div class="promo-split">
            <div class="promo-card promo-1">
                <div class="deco"></div>
                <span class="eyebrow">عرض الإلكترونيات</span>
                <h3>خصم يصل إلى 30% على الأجهزة الذكية</h3>
                <p>ساعات ذكية، سماعات، وإكسسوارات تقنية بأسعار لا تُفوّت.</p>
            </div>
            <div class="promo-card promo-2">
                <div class="deco"></div>
                <span class="eyebrow">مجموعة جديدة</span>
                <h3>تشكيلة الأزياء لموسم الخريف</h3>
                <p>قطع مختارة بعناية تناسب كل الأذواق والمناسبات.</p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="newsletter">
            <h3>لا تفوّت عروضنا القادمة</h3>
            <p>اشترك في نشرتنا البريدية واحصل على خصم 10% على طلبك الأول</p>
            <form class="news-form" action="{{ route('subscribe') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="بريدك الإلكتروني">
                <button type="submit">اشتراك</button>
            </form>
            <div class="mt-3 text-center">
                @error('email')
                    <span class="text-red-500 fw-bolder">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </section>

    <x-footer />

</body>

</html>
