<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header("Location: Login.php");
    exit();
}

// Get the username and user ID from the session
$userName = $_SESSION['user_name'];
$userID = $_SESSION['user_id'];

// Determine user role
if ($_SESSION['role'] == 'Doctor') {
    $userRole = 'Doctor';
} elseif ($_SESSION['role'] == 'Patient') {
    $userRole = 'Patient';
} else {
    // Default to Guest role if role is not set or unrecognized
    $userRole = 'Guest';
}

// Handle logout
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: Login.php");
    exit();
}
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

        .login:hover {
            opacity: 0.8;
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
    <div class="logo">Mind<span class="highlight">Mates</span></div>
        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">Contact</a>
            <a href="#">About Us</a>
        </nav>
        <div class="auth">
            <div class="user-menu">
                <span>Welcome, <?php echo $userName; ?></span>
                <form method="POST" action="">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
        <?php if ($userRole === 'Patient') { ?>
                <a href="PatientProfile.php" class="profile-link">Patient Profile</a>
            <?php } elseif ($userRole === 'Doctor') { ?>
                <a href="DoctorProfile.php" class="profile-link">Doctor Profile</a>
            <?php } ?>
    </div>
    </header>
    
        <div class="main-content">
            <h1>Welcome to MindMates</h1>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus ligula mauris, et viverra quam dignissim et.</p>
            <div class="illustration">
            <img src="illustration.png" alt="Illustration">
        </div>
</body>
</html>