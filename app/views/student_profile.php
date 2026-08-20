<!DOCTYPE html>
<html>
<head>
    <title>Mark Francis | Digital Student Profile</title>

    <style>
        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
        }

        body{
            font-family:'Segoe UI',sans-serif;
            background:#fafafa;
            color:#1e293b;
        }

        .navbar{
            background:rgba(255,255,255,.9);
            backdrop-filter:blur(10px);
            border-bottom:1px solid #e5e7eb;
            padding:20px;
            text-align:center;
        }

        .navbar a{
            text-decoration:none;
            color:#475569;
            margin:0 15px;
            font-weight:500;
            transition:.3s;
        }

        .navbar a:hover{
            color:#111827;
        }

        .profile{
            width:90%;
            max-width:900px;
            margin:50px auto;
        }

        .header-card{
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:24px;
            padding:50px 30px;
            text-align:center;
            margin-bottom:25px;
            box-shadow:0 10px 30px rgba(0,0,0,.04);
        }

        .avatar{
            width:100px;
            height:100px;
            border-radius:50%;
            background:#111827;
            color:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:34px;
            font-weight:bold;
            margin:0 auto 20px;
        }

        h1{
            color:#111827;
            margin-bottom:8px;
        }

        .subtitle{
            color:#64748b;
        }

        .card{
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:20px;
            padding:25px;
            margin-bottom:20px;
            box-shadow:0 5px 20px rgba(0,0,0,.03);
        }

        .card h2{
            color:#111827;
            margin-bottom:20px;
            font-size:22px;
        }

        .info{
            display:flex;
            justify-content:space-between;
            padding:14px 0;
            border-bottom:1px solid #f1f5f9;
            gap:20px;
        }

        .info:last-child{
            border-bottom:none;
        }

        .label{
            font-weight:600;
            color:#334155;
        }

        .value{
            color:#64748b;
            text-align:right;
        }

        .about{
            line-height:1.8;
            color:#64748b;
            margin-bottom:20px;
        }

        .social-links{
            display:flex;
            gap:12px;
            flex-wrap:wrap;
        }

        .social-links a{
            text-decoration:none;
            padding:12px 22px;
            border:1px solid #d1d5db;
            border-radius:999px;
            color:#111827;
            font-weight:600;
            transition:.3s;
        }

        .social-links a:hover{
            background:#111827;
            color:#fff;
        }

        .back-button{
            display:block;
            width:fit-content;
            margin:30px auto;
            padding:14px 26px;
            background:#111827;
            color:white;
            text-decoration:none;
            border-radius:999px;
            transition:.3s;
        }

        .back-button:hover{
            background:#374151;
        }

        @media(max-width:600px){
            .info{
                flex-direction:column;
                gap:6px;
            }

            .value{
                text-align:left;
            }

            h1{
                font-size:28px;
            }
        }
    </style>
</head>

<body>

<?php

$student_id = !empty($student_id) ? $student_id : '2026-0001';
$name = !empty($name) ? $name : 'Mark Francis';
$course = !empty($course) ? $course : 'Bachelor of Science in Information Technology';
$year = !empty($year) ? $year : '2nd Year';
$section = !empty($section) ? $section : 'BSIT 2A';
$email = !empty($email) ? $email : 'markfrancis@example.com';
$contact = !empty($contact) ? $contact : '09XX XXX XXXX';
$address = !empty($address) ? $address : 'Calapan City, Oriental Mindoro';
$skills = !empty($skills) ? $skills : 'HTML, CSS, PHP, JavaScript, MySQL';
$hobbies = !empty($hobbies) ? $hobbies : 'Coding, Gaming, Music, Cycling';
$description = !empty($description) ? $description : 'I am Mark Francis, a BS Information Technology student who enjoys learning about web development, programming, and modern technology. I am interested in improving my technical skills and creating useful and user-friendly digital applications.';
$facebook = !empty($facebook) ? $facebook : '#';
$github = !empty($github) ? $github : '#';

?>

<div class="navbar">
    <a href="<?= site_url('student'); ?>">Home</a>
    <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
</div>

<div class="profile">

    <!-- PROFILE HEADER -->
    <div class="header-card">

        <div class="avatar">
            MF
        </div>

        <h1>
            Mark Francis
        </h1>

        <div class="subtitle">
            BS Information Technology Student
        </div>

    </div>


    <!-- PERSONAL INFORMATION -->
    <div class="card">

        <h2>Personal Information</h2>

        <div class="info">
            <span class="label">Student ID</span>
            <span class="value"><?= $student_id ?></span>
        </div>

        <div class="info">
            <span class="label">Full Name</span>
            <span class="value"><?= $name ?></span>
        </div>

        <div class="info">
            <span class="label">Course</span>
            <span class="value"><?= $course ?></span>
        </div>

        <div class="info">
            <span class="label">Year Level</span>
            <span class="value"><?= $year ?></span>
        </div>

        <div class="info">
            <span class="label">Section</span>
            <span class="value"><?= $section ?></span>
        </div>

        <div class="info">
            <span class="label">Email</span>
            <span class="value"><?= $email ?></span>
        </div>

        <div class="info">
            <span class="label">Contact Number</span>
            <span class="value"><?= $contact ?></span>
        </div>

        <div class="info">
            <span class="label">Location</span>
            <span class="value"><?= $address ?></span>
        </div>

    </div>


    <!-- ABOUT ME -->
    <div class="card">

        <h2>About Me</h2>

        <p class="about">
            <?= $description ?>
        </p>

        <div class="info">
            <span class="label">Skills</span>
            <span class="value"><?= $skills ?></span>
        </div>

        <div class="info">
            <span class="label">Hobbies & Interests</span>
            <span class="value"><?= $hobbies ?></span>
        </div>

    </div>


    <!-- SOCIAL MEDIA -->
    <div class="card">

        <h2>Social Media</h2>

        <div class="social-links">

            <a href="<?= $facebook ?>" target="_blank">
                Facebook
            </a>

            <a href="<?= $github ?>" target="_blank">
                GitHub
            </a>

        </div>

    </div>


    <!-- BACK BUTTON -->
    <a class="back-button" href="<?= site_url('student'); ?>">
        Back to Student Hub
    </a>

</div>

</body>
</html>