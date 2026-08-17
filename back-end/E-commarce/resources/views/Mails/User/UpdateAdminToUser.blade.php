<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحديث صلاحيات الحساب - {{ env('APP_NAME') }}</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#eef2f7;
    font-family:Arial, Tahoma, sans-serif;
">

<table width="100%" cellpadding="0" cellspacing="0" border="0"
    style="background:#eef2f7; padding:40px 15px;">

    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" border="0"
                style="
                    max-width:600px;
                    width:100%;
                    background:#ffffff;
                    border-radius:18px;
                    overflow:hidden;
                    box-shadow:0 8px 30px rgba(0,0,0,0.08);
                ">

                <tr>
                    <td align="center"
                        style="
                            background:#2563eb;
                            padding:35px 25px;
                        ">

                        <a href="{{ env('APP_URL') }}"
                            style="text-decoration:none;">

                            <h1 style="
                                margin:0;
                                color:#ffffff;
                                font-size:28px;
                                font-weight:bold;
                            ">
                                {{ env('APP_NAME') }}
                            </h1>

                        </a>

                        <p style="
                            margin:10px 0 0;
                            color:#dbeafe;
                            font-size:15px;
                        ">
                            متجرك المفضل للتسوق أونلاين
                        </p>

                    </td>
                </tr>

                <tr>
                    <td align="center"
                        style="padding:45px 35px 35px;">

                        <div style="
                            width:70px;
                            height:70px;
                            background:#eff6ff;
                            border-radius:50%;
                            line-height:70px;
                            font-size:32px;
                            margin-bottom:20px;
                        ">
                            👤
                        </div>

                        <h2 style="
                            margin:0 0 12px;
                            color:#222222;
                            font-size:27px;
                        ">
                            تحديث حسابك
                        </h2>

                        <h3 style="
                            margin:0 0 25px;
                            color:#2563eb;
                            font-size:22px;
                        ">
                            {{ $username }}
                        </h3>

                        <p style="
                            margin:0;
                            color:#555555;
                            font-size:17px;
                            line-height:2;
                        ">
                            تم تحديث صلاحيات حسابك في
                            <strong style="color:#2563eb;">
                                {{ env('APP_NAME') }}
                            </strong>
                            بنجاح.
                        </p>

                        <p style="
                            margin:18px 0 0;
                            color:#777777;
                            font-size:15px;
                            line-height:1.9;
                        ">
                            لم تعد تمتلك صلاحيات مدير النظام،
                            وأصبح حسابك الآن
                            <strong style="color:#2563eb;">
                                مستخدماً عادياً
                            </strong>.
                        </p>

                        <table cellpadding="0" cellspacing="0" border="0"
                            style="margin:30px auto 0;">

                            <tr>
                                <td align="center"
                                    style="
                                        background:#2563eb;
                                        border-radius:10px;
                                    ">

                                    <a href="{{ env('APP_URL') }}"
                                        style="
                                            display:inline-block;
                                            padding:14px 30px;
                                            color:#ffffff;
                                            text-decoration:none;
                                            font-size:16px;
                                            font-weight:bold;
                                        ">
                                        العودة إلى المتجر 🛍️
                                    </a>

                                </td>
                            </tr>

                        </table>

                        <div style="
                            height:1px;
                            background:#eeeeee;
                            margin:35px 0 25px;
                        "></div>

                        <p style="
                            margin:0;
                            color:#999999;
                            font-size:13px;
                            line-height:1.8;
                        ">
                            يمكنك الاستمرار في استخدام حسابك والتسوق
                            والاستفادة من جميع الخدمات المتاحة للمستخدمين.
                        </p>

                    </td>
                </tr>

                <tr>
                    <td align="center"
                        style="
                            background:#f8fafc;
                            padding:25px 20px;
                            border-top:1px solid #eeeeee;
                        ">

                        <a href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}"
                            style="
                                color:#2563eb;
                                text-decoration:none;
                                font-size:17px;
                                font-weight:bold;
                            ">
                            Eng. Ahmed
                        </a>

                        <p style="
                            margin:18px 0 0;
                            color:#aaaaaa;
                            font-size:12px;
                        ">
                            © {{ date('Y') }} {{ env('APP_NAME') }}
                            — جميع الحقوق محفوظة
                        </p>

                    </td>
                </tr>

            </table>

        </td>
    </tr>

</table>

</body>

</html>