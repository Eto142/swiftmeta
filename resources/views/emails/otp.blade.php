<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333333;
            font-size: 24px;
        }
        p {
            color: #555555;
            font-size: 16px;
            line-height: 1.5;
        }
        .otp {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 4px;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 6px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888888;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello {{ $name }},</h1>
        <p>Thank you for updating your account details. To complete your verification, please use the following One-Time Password (OTP):</p>

        <div class="otp">{{ $otp }}</div>

        <p>Please enter this code in the OTP verification page to activate your account.</p>

        <p>If you did not request this, please ignore this email.</p>

        <div class="footer">
            &copy; {{ date('Y') }} Your Company Name. All rights reserved.
        </div>
    </div>
</body>
</html>
