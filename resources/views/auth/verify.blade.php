<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Meta Trade | OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #52afee;
            --secondary: #f58634;
            --dark-bg: #1a1a2e;
            --card-bg: #252547;
            --text-light: #f8f9fa;
            --text-muted: #a0a0c0;
        }
        body {
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .otp-card {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            padding: 30px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            border: 1px solid #3a3a5e;
        }
        .otp-card .avatar {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary) 0%, #2a6b9c 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            border: 3px solid rgba(255, 255, 255, 0.1);
        }
        .otp-card .avatar i {
            font-size: 1.8rem;
            color: white;
        }
        .form-control {
            background: rgba(30, 30, 60, 0.7);
            border: 1px solid #3a3a5e;
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 24px;
            letter-spacing: 8px;
        }
        .form-control:focus {
            background: rgba(40, 40, 80, 0.8);
            border-color: var(--primary);
            color: var(--text-light);
            box-shadow: 0 0 0 0.2rem rgba(82, 175, 238, 0.2);
        }
        .btn-verify {
            background: linear-gradient(135deg, var(--primary) 0%, #2a6b9c 100%);
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
            width: 100%;
            font-size: 18px;
        }
        .btn-verify:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(82, 175, 238, 0.3);
        }
        .response {
            min-height: 20px;
            text-align: center;
            margin-top: 10px;
            color: #f56565;
        }
        p.text-muted {
    color: white !important;
}

/* Make input placeholder white */
.form-control::placeholder {
    color: rgba(255, 255, 255, 0.8) !important;
}

/* Make input text white */
.form-control {
    color: white !important;
}

    </style>
</head>
<body>
    <div class="otp-card">
        <div class="avatar">
            <i class="fas fa-shield-alt"></i>
        </div>
        <h4 class="mb-3">OTP Verification</h4>
        <p class="text-muted mb-4" style="color:white">Enter the 4-digit OTP sent to your email to verify your account.</p>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

       <form method="POST" action="{{ route('user.step3') }}">
    @csrf
    <input type="text" name="otp_code" maxlength="4" class="form-control mb-3" placeholder="----" required autofocus>
    <button type="submit" class="btn btn-verify">Verify OTP</button>
</form>

<form method="POST" action="{{ route('user.resend.otp') }}" class="mt-3">
    @csrf
    <button type="submit" class="btn btn-outline-light w-100">Resend OTP</button>
</form>



        <div class="response">
            @error('otp_code') {{ $message }} @enderror
        </div>
    </div>
</body>
</html>
