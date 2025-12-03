<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef1f7;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 40px auto;
            padding: 35px 30px;
            border-radius: 10px;
            border: 1px solid #e0e4ec;
            box-shadow: 0 4px 10px rgba(0,0,0,0.04);
        }
        .logo {
            text-align: center;
            margin-bottom: 25px;
        }
        .logo-text {
            font-size: 32px;
            font-weight: 800;
            letter-spacing: 1.5px;
            font-family: 'Trebuchet MS', Arial, sans-serif;
            color: #0b1c36;
            text-transform: uppercase;
            background: linear-gradient(90deg, #0b1c36, #3a74ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .logo-sub {
            font-size: 12px;
            color: #7d8aa6;
            letter-spacing: 0.5px;
            margin-top: 4px;
        }
        h1 {
            color: #2d3a4b;
            font-size: 22px;
            margin-top: 10px;
        }
        p {
            color: #4a5568;
            font-size: 15px;
            line-height: 1.6;
        }
        .otp {
            display: inline-block;
            padding: 12px 26px;
            margin: 22px 0;
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 4px;
            color: #ffffff;
            background-color: #3a74ff;
            border-radius: 8px;
        }
        .footer {
            margin-top: 35px;
            font-size: 12px;
            color: #7c869b;
            text-align: center;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Premium Logo -->
        <div class="logo">
            <div class="logo-text">
                Swift<span style="font-weight:300;">Meta</span><span style="font-weight:800;">Trd</span>
            </div>
        
        </div>

        <h1>Hello {{ $name }},</h1>

        <p>
            Thank you for updating your account details.  
            To complete your verification, please use the One-Time Password (OTP) below:
        </p>

        <div class="otp">{{ $otp }}</div>

        <p>Please enter this code on the OTP verification page to finalize your account update.</p>

        <p>If you did not request this change, you may safely ignore this email.</p>

        <div class="footer">
            &copy; {{ date('Y') }} Swiftmetatrd. All rights reserved.
        </div>

    </div>
</body>
</html>
