<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMates - Mental Health and Physical Well-being</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #4f4f4f;
            overflow: hidden; /* Ensure no scrollbar appears */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px; /* Reduced padding */
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar a {
            text-decoration: none;
            color: #4f4f4f;
            font-weight: 600;
            margin-right: 10px; /* Reduced margin */
        }

        .navbar a:last-child {
            margin-right: 0;
        }

        .navbar .logo {
            font-weight: 600;
            font-size: 20px; /* Reduced font size */
            color: #3a3a3a;
        }

        .navbar .btn {
            padding: 8px 16px; /* Reduced padding */
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            border: none;
            border-radius: 20px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .navbar .btn:hover {
            opacity: 0.9;
        }

        .navbar .home-link {
            color: #3d6ed9;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 20px; /* Reduced padding */
            height: calc(100vh - 60px); /* Ensure content fits within viewport */
        }

        .text-content {
            max-width: 50%;
        }

        .text-content h1 {
            font-size: 50px; /* Reduced font size */
            font-weight: 700;
            color:#677aea;
            margin-bottom: 10px; /* Reduced margin */
        }

        .illustration {
            max-width: 45%;
            text-align: right;
        }

        .illustration img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <span class="logo">MindMates</span>
        <div>
            <a href="#" class="home-link">Home</a>
            <a href="Contact.php">Contact</a>
            <a href="Aboutus.php">About Us</a>
            <a href="Auth/Login.php" class="btn">Login</a>
            <a href="Auth/Register.php" class="btn">Register</a>
        </div>
    </nav>
    
    <main class="content">
        <div class="text-content">
            <h1>Your Partner in Mental and Physical Health, Start Now! </h1>
        </div>

        <div class="illustration">
            <img src="Style\Images\d3d88d33c5de3db3dc290be7a3a707b6.jpg" alt="Meditation Illustration">
        </div>
    </main>
</body>
</html>
