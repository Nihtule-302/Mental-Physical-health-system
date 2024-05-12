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
                <a href="Auth/PatientProfile.php" class="profile-link">Patient Profile</a>
            <?php } elseif ($userRole === 'Doctor') { ?>
                <a href="Auth/DoctorProfile.php" class="profile-link">Doctor Profile</a>
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