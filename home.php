<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header("Location: Auth/Login.php");
    exit();
}

// Get the username and user ID from the session
$userName = $_SESSION['user_name'];
$userID = $_SESSION['user_id'];
$name = $_SESSION['name'];

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
    header("Location: Auth/Login.php");
    exit();
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMates - Mental Health Consultancy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/css/style.css" />

</head>

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
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar a {
            text-decoration: none;
            color: #4f4f4f;
            font-weight: 600;
            margin-right: 20px;
        }

        .navbar a:last-child {
            margin-right: 0;
        }

        .navbar .logo {
            font-weight: 600;
            font-size: 24px;
            color: #3a3a3a;
        }

        .cta-button {
            padding: 10px 30px;
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

        .cta-button:hover {
            opacity: 0.9;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 100px;
            min-height: calc(100vh - 100px);
        }

        .text-content {
            max-width: 600px;
        }

        .text-content h1 {
            font-size: 40px;
            font-weight: 600;
            color: #3a3a3a;
            margin-bottom: 20px;
        }

        .text-content p {
            font-size: 16px;
            color: #828282;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .text-content .highlight {
            color: #00b5c3;
        }

        .illustration {
            max-width: 50%;
            text-align: right;
        }

        .illustration img {
            max-width: 100%;
            height: auto;
        }
</style>
<body>
    <nav class="navbar">
        <span class="logo">MindMates</span>
        <div>
            <a href="#">Home</a>
            <a href="Contact.php">Contact</a>
            <a href="Aboutus.php">About Us</a>
            <a href="Auth/Logout.php">Logout</a>
        </div>

    <?php if ($userRole === 'Patient') { ?>
            <a href="Auth/PatientProfile.php" class="cta-button">Your Profile</a>
        <?php } elseif ($userRole === 'Doctor') { ?>
            <a href="Auth/DoctorProfile.php" class="cta-button">Your Profile</a>
        <?php } ?>
    </nav>
    
            

        <main class="content">
            <div class="text-content">
                <h1>Welcome, <span class="highlight"><?php echo $name; ?></span></h1>
                <p>Welcome to MindMates, your haven for mental wellness! Explore resources, find support, and connect with a community dedicated to well-being.</p>
                <?php if ($userRole === 'Patient') { ?>
                        <a href="Auth/ChooseSymptoms.php" class="cta-button">Book A session</a>
                    <?php } elseif ($userRole === 'Doctor') { ?>
                        <a href="Auth/EnterAppointments.php" class="cta-button">Add Appointment</a>
                    <?php } ?> 
            </div>

            <div class="illustration">
                <img src="Images\Homepatient.jpg" alt="Meditation Illustration">
            </div>

        </main>
</body>
</html>