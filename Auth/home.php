<?php 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMates - Mental Health Consultancy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f8fa;
            color: #4f4f4f;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 24px;
            font-weight: 600;
            color: #1c1c1c;
        }

        .logo span {
            color: #00b5c3;
        }

        .nav a {
            margin-right: 30px;
            text-decoration: none;
            font-size: 16px;
            color: #4f4f4f;
        }

        .nav a:hover {
            color: #1c1c1c;
        }

        .auth {
            display: flex;
            align-items: center;
        }

        .register {
            padding: 10px 20px;
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin-right: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .register:hover {
            opacity: 0.8;
        }

        .login {
            text-decoration: none;
            font-size: 16px;
            color: #4f4f4f;
            font-weight: 400;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-top: 60px;
            padding: 0 20px;
        }

        h1 {
            font-size: 36px;
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 20px;
        }

        .highlight {
            color: #00b5c3;
        }

        .description {
            font-size: 16px;
            max-width: 600px;
            margin-bottom: 40px;
            color: #828282;
        }

        .illustration {
            margin-top: 30px;
        }

        .illustration img {
            max-width: 80%;
            height: auto;
        }

    </style>
</head>
<body>
    <header class="header">
        <div class="logo">Mind<span>Mates</span></div>
        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">Contact</a>
            <a href="#">About Us</a>
        </nav>
        <div class="auth">
            <a href="Register.php" class="register">Register</a>
            <a href="Login.php" class="login">Login</a>
        </div>
    </header>
    
    <main class="main-content">
        <h1>Healthy Minds, Happy Lives <span class="highlight">Mental Health</span> Consultancy</h1>
        <p class="description">Welcome to MindMates, your haven for mental wellness! Explore resources, find support, and connect with a community dedicated to well-being.</p>
        <div class="illustration">
            <img src="https://undraw.co/api/illustrations/3fcbe13a-741a-49ec-bfa6-6f14e2c841c1" alt="Meditation Illustration">
        </div>
    </main>
</body>
</html>