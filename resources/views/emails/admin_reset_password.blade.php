<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ReproServe – Password Reset</title>

    <style>
        body {
            background: #f4f4f7;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e5e5e5;
        }

        .email-header {
            background: #ff4d4d; /* Theme Red */
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        .email-body {
            padding: 25px;
            color: #333;
            font-size: 15px;
            line-height: 1.6;
        }

        .highlight-box {
            background: #f8f8f8;
            border-left: 4px solid #ff4d4d;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
        }

        .btn-login {
            display: inline-block;
            background: #ff4d4d;
            color: #fff !important;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin: 20px 0;
        }

        .email-footer {
            background: #fafafa;
            text-align: center;
            color: #888;
            padding: 20px;
            font-size: 13px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="email-container">

    <div class="email-header">
        🔐 ReproServe Admin Password Reset
    </div>

    <div class="email-body">

        <p>Hello Admin,</p>

        <p>Your password has been successfully reset. Please use the new password below to log in.</p>

        <div class="highlight-box">
            {{ $password }}
        </div>

        <p>
            For your security, please log in immediately and change this password.
        </p>

        <center>
            <a href="{{ url('/admin') }}" class="btn-login">Login to Your Account</a>
        </center>

        <p>Thank you,<br>
           <strong>ReproServe Team</strong></p>
    </div>

    <div class="email-footer">
        This is an automated message, please do not reply.
    </div>

</div>

</body>
</html>
