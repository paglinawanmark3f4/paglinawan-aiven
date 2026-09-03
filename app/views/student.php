<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Francis Student Space</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #fafafa;
            color: #1e293b;
        }

        .navbar {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
        }

        .navbar a {
            color: #475569;
            text-decoration: none;
            margin: 0 18px;
            font-weight: 500;
            transition: 0.3s;
        }

        .navbar a:hover {
            color: #111827;
        }

        .hero {
            width: 90%;
            max-width: 850px;
            margin: 100px auto;
            padding: 70px 40px;
            text-align: center;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        }

        .avatar {
            width: 100px;
            height: 100px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: #111827;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            font-weight: bold;
        }

        h1 {
            margin: 0;
            font-size: 38px;
            color: #111827;
            font-weight: 700;
        }

        .subtitle {
            margin: 20px auto;
            max-width: 600px;
            color: #64748b;
            font-size: 16px;
            line-height: 1.8;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 28px;
            background: #111827;
            color: white;
            text-decoration: none;
            border-radius: 999px;
            font-weight: 600;
            transition: 0.3s;
        }

        .button:hover {
            background: #334155;
            transform: translateY(-2px);
        }

        .footer {
            text-align: center;
            padding: 30px;
            color: #94a3b8;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 28px;
            }

            .hero {
                padding: 50px 20px;
                margin-top: 60px;
            }

            .navbar a {
                margin: 0 8px;
            }
        }
    </style>
</head>

<body>

<!-- NAVIGATION -->
<div class="navbar">

    <a href="<?= site_url('student'); ?>">
        Home
    </a>

    <a href="<?= site_url('student/profile'); ?>">
        Student Profile
    </a>

</div>


<!-- HERO -->
<div class="hero">

    <div class="avatar">
        MF
    </div>

    <h1>
        Welcome to Mark Francis Student Space
    </h1>

    <p class="subtitle">
        A personal student information page built with LavaLust.
        Get to know me, my studies, skills, hobbies, and interests.
    </p>

    <a class="button" href="<?= site_url('student/profile'); ?>">
        Explore My Profile
    </a>

</div>


<!-- FOOTER -->
<div class="footer">
    Mark Francis Student Space • Built with LavaLust
</div>

</body>
</html>