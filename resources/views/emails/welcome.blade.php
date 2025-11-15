<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Welcome to GWC</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f6f8; margin: 0; padding: 0;">

  <div style="max-width: 650px; margin: 40px auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.05); overflow: hidden;">

    <!-- Header -->
    <div style="background-color: #052c65; color: #ffffff; text-align: center; padding: 30px 20px;">
      <h1 style="margin: 0; font-size: 24px; font-weight: 600;">
        <span style="color: #00bfff;">Glob</span> Wave <span style="color: #ffffff;">C</span>
      </h1>
      <p style="margin: 8px 0 0; font-size: 14px; color: #cfd8e3;">
        Glob Perspective.
      </p>
    </div>

    <!-- Body -->
    <div style="padding: 30px; color: #333333;">
      <p style="font-size: 16px;">Hello {{ $user->name }},</p>

      <p style="font-size: 15px; line-height: 1.6;">
        Welcome to <strong>GWC</strong>. Your account has been set up successfully.
      </p>

      <p style="font-size: 15px; line-height: 1.6;">
        You can now sign in to your dashboard to view your account details and continue your activities.
      </p>

    
      <p style="font-size: 14px; color: #666;">
        For any questions, please reply to this email or contact our support team through your account dashboard.
      </p>

      <p style="font-size: 15px; margin-top: 25px;">
        Kind regards,<br>
        <strong>GWC</strong>
      </p>
    </div>

    <!-- Footer -->
    <div style="background-color: #f8f9fa; text-align: center; padding: 15px; font-size: 12px; color: #888;">
      © {{ date('Y') }} GWC.  
      This message was sent automatically, please do not reply directly.
    </div>

  </div>

</body>
</html>
