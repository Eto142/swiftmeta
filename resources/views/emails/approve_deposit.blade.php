<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deposit Approved</title>
</head>
<body style="font-family: Arial, sans-serif; background:#eef1f7; margin:0; padding:0;">

    <div style="width:100%; padding:40px 0;">
        <div style="max-width:600px; margin:auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.04);">

            <!-- Header with Premium Text Logo -->
            <div style="background:#ffffff; padding:35px 20px; text-align:center; border-bottom:1px solid #ececec;">
                <div style="
                    font-size:32px;
                    font-weight:800;
                    letter-spacing:1.5px;
                    font-family:'Trebuchet MS', Arial, sans-serif;
                    color:#0b1c36;
                    text-transform:uppercase;
                    background: linear-gradient(90deg, #0b1c36, #3a74ff);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                ">
                    Swift<span style="font-weight:300;">Meta</span><span style="font-weight:800;">Trd</span>
                </div>
              
            </div>

            <!-- Body -->
            <div style="padding:35px 28px; color:#333; font-size:15px; line-height:1.7;">
                <h2 style="color:#2d3a4b; font-size:20px; margin-bottom:20px;">Hello!</h2>

                <p style="margin-bottom:20px; color:#4a5568;">
                    {{ $data['message'] }}
                </p>

                <p style="margin-bottom:10px; font-weight:bold;">Deposit Details:</p>
                <ul style="margin:0 0 20px 20px; color:#4a5568; padding:0; font-size:15px; line-height:1.6;">
                    <li>Amount: {{ $data['amount'] }}</li>
                    {{-- <li>Type: {{ $data['deposit_type'] }}</li> --}}
                </ul>

                <p style="margin-top:20px; color:#4a5568;">Thank you for using our service!</p>
            </div>

            <!-- Footer -->
            <div style="background:#f8f9fc; padding:18px; text-align:center; font-size:12px; color:#7c869b; line-height:1.5;">
                You are receiving this message because you are a verified user of Swiftmetatrd.<br>
                If this email is not relevant to you, please disregard it.<br><br>
                &copy; {{ date('Y') }} Swiftmetatrd. All Rights Reserved.
            </div>

        </div>
    </div>

</body>
</html>
