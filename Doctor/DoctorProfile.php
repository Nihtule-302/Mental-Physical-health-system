<?php
// Your PHP code here (if any)
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMates - Doctor Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eff8fb;
            color: #4f4f4f;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        .logo {
            font-size: 24px;
            font-weight: 600;
            color: #1c1c1c;
        }

        .logo span {
            color: #00b5c3;
        }

        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #00b5c3;
        }

        .profile-pic img {
            width: 100%;
            height: auto;
        }

        .profile-name {
            font-weight: 600;
            font-size: 18px;
            color: #3a3a3a;
        }

        .sidebar-nav {
            width: 100%;
            list-style: none;
            margin-top: 20px;
        }

        .sidebar-nav li {
            margin-bottom: 20px;
        }

        .sidebar-nav a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: #4f4f4f;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-nav a:hover {
            color: #00b5c3;
        }

        .main-content {
            flex: 1;
            padding: 40px 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header a {
            text-decoration: none;
            font-size: 16px;
            color: #4f4f4f;
            font-weight: 500;
            margin-left: 30px;
        }

        .header a:hover {
            color: #1c1c1c;
        }

        .profile-info {
            background-color: #ffffff;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            border: 1px solid #b7c0db;
        }

        .profile-info h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            color: #3a3a3a;
        }

        .profile-info p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #4f4f4f;
        }

        .edit-button {
            padding: 12px 20px;
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .edit-button:hover {
            opacity: 0.9;
        }

    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="logo">Mind<span>Mates</span></div>
        <div class="profile-pic">
            <img src="https://undraw.co/api/illustrations/9d17b81d-d76c-4721-83a9-c31cfe123af1" alt="Peter Profile Picture">
        </div>
        <div class="profile-name">Peter</div>
        <ul class="sidebar-nav">
            <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/1/14/Home_icon.svg" alt="Home Icon" width="20px"> Profile</a></li>
            <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Session_icon.svg" alt="Session Icon" width="20px"> Your Session</a></li>
            <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Logout_icon.svg" alt="Logout Icon" width="20px"> Logout</a></li>
        </ul>
    </aside>
    <main class="main-content">
        <div class="header">
            <h1>Hello Dr. Peter,</h1>
            <nav>
                <a href="LoggedDoctor">Home</a>
                <a href="#">Contact</a>
                <a href="#">About Us</a>
            </nav>
        </div>
        <div class="profile-info">
            <h2>Personal Information</h2>
            <p><strong>Name:</strong> Anekant Jain</p>
            <p><strong>Anonymous Name :</strong> Smily</p>
            <p><strong>Email :</strong> anekantjainsagar@gmail.com</p>
            <p><strong>City :</strong></p>
            <p><strong>State :</strong></p>
            <p><strong>Profession :</strong></p>
            <a href="#" class="edit-button">Edit Profile</a>
        </div>
    </main>
</body>
</html>
