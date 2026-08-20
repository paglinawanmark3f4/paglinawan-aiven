<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied | Mark Francis Student Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fafafa;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 480px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 24px;
            padding: 50px 40px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
        }

        .icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 12px;
            color: #111827;
            font-weight: 700;
        }

        p {
            color: #64748b;
            line-height: 1.7;
            margin-bottom: 25px;
            font-size: 15px;
        }

        .notice {
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            padding: 16px;
            margin-bottom: 25px;
            text-align: left;
            border-radius: 14px;
            color: #64748b;
            line-height: 1.6;
            font-size: 14px;
        }

        .notice strong {
            color: #334155;
        }

        .button {
            display: inline-block;
            padding: 14px 26px;
            background: #111827;
            color: white;
            text-decoration: none;
            border-radius: 999px;
            font-weight: 600;
            transition: 0.3s;
        }

        .button:hover {
            background: #374151;
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 28px;
            font-size: 13px;
            color: #94a3b8;
        }

        @media (max-width: 600px) {
            .container {
                padding: 40px 25px;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="icon">
            🔒
        </div>

        <h1>Access Denied</h1>

        <p>
            You currently don't have permission to access
            the Student Profile.
        </p>

        <div class="notice">
            <strong>Student Profile Restricted</strong><br>
            Please contact the administrator if you believe
            you should have access to this page.
        </div>

        <a href="<?= site_url('student') ?>" class="button">
            Back to Student Page
        </a>

        <div class="footer">
            Mark Francis Student Portal
        </div>

    </div>

</body>
</html>