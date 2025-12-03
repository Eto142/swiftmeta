<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notification Update</title>
</head>

<body style="margin:0; padding:0; background:#f5f6fa; font-family:Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0; background:#f5f6fa;">
        <tr>
            <td align="center">

                <!-- Card Container -->
                <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; background:white; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.08); overflow:hidden;">

                    <!-- Logo Section -->
                    <tr>
                        <td align="center" style="background:#ffffff; padding:25px 10px; border-bottom:1px solid #eee;">
                            <img src="{{ asset('logo.png') }}" alt="Logo" style="width:120px; height:auto;">
                        </td>
                    </tr>

                    <!-- Content Section -->
                    <tr>
                        <td style="padding:30px; color:#333;">

                            <h2 style="margin:0; font-size:22px; font-weight:600; color:#333;">
                                Hello,
                            </h2>

                            <p style="margin-top:15px; font-size:15px; line-height:1.7; color:#555;">
                                {!! nl2br(e($messageText)) !!}
                            </p>

                            <p style="margin-top:25px; font-size:15px; color:#555;">
                                Regards,<br>
                                <strong style="color:#000;">Swiftmetatrd</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background:#fafafa; padding:15px; border-top:1px solid #eee; font-size:12px; color:#888;">
                            © {{ date('Y') }} Swiftmetatrd All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
