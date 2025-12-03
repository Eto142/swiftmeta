<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="x-apple-disable-message-reformatting">
    <title>Account Notification</title>
</head>

<body style="margin:0; padding:0; background:#f4f4f7; font-family:Arial, sans-serif;">

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f4f7; padding:40px 0;">
        <tr>
            <td align="center">

                <!-- Main Card -->
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" 
                       style="max-width:600px; background:#ffffff; border-radius:8px; border:1px solid #e8e8e8;">

                    <!-- Text Logo Section -->
                    <tr>
                        <td align="center" style="padding:30px 10px; border-bottom:1px solid #eaeaea;">
                            <h1 style="
                                margin:0;
                                font-size:28px;
                                font-weight:700;
                                letter-spacing:1px;
                                color:#0b1c36;
                                text-transform:uppercase;
                            ">
                                Swiftmetatrd
                            </h1>
                           
                        </td>
                    </tr>

                    <!-- Body Content -->
                    <tr>
                        <td style="padding:30px 25px; color:#333333; font-size:15px; line-height:1.6;">

                            <p style="margin:0 0 15px;">Hello,</p>

                            <p style="margin:0 0 20px; color:#555;">
                                {!! nl2br(e($messageText)) !!}
                            </p>

                            <p style="margin:25px 0 0;">
                                Regards,<br>
                                <strong>Swiftmetatrd Support</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" 
                            style="background:#fafafa; padding:15px; border-top:1px solid #eaeaea; font-size:12px; color:#666;">
                            
                           You received this message because you are a registered user of Swiftmetatrd.<br>
                           If you did not request this update, simply disregard this email.<br><br>

                           © {{ date('Y') }} Swiftmetatrd. All Rights Reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
