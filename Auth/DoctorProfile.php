<?php
session_start(); // Start the session at the beginning

// Check if the user clicked on Logout
if (isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Redirect to the login page after logout
    header("Location: Login.php");
    exit();
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: Login.php");
    exit();
}

// Get the logged-in user ID
$userID = $_SESSION['user_id'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental/phsycal"; // Database name with slash

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL query to fetch doctor's profile based on user ID
$sql = "SELECT * FROM doctors WHERE user_id = $userID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Doctor profile found, fetch data
    $row = $result->fetch_assoc();
    $doctorID = $row['id']; // Get the doctor ID
    $doctorName = $row['name'];
    $doctorEmail = $row['email'];
    $phone = $row['phone_number'];
    $license = $row['medical_license'];
    $certifications = $row['certifications'];
    $specialization = $row['specialization'];
} else {
    // No doctor profile found for the user
    $error = "Doctor profile not found!";
}

$conn->close();
?>

<!DOCTYPE html>
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
            <img src="..\Style\Images\a4040890a14cf4de8ecea56265f66cf7.jpg" alt="Doctor Profile Picture">
        </div>
        <div class="profile-name"><?php echo isset($doctorName) ? "Dr. " . $doctorName : ""; ?></div>
        <ul class="sidebar-nav">
<<<<<<< Updated upstream
            <li><a href="#"><img src="../Style\Images\calendar-clock.png" alt="Session Icon" width="20px"> Your Session</a></li>
            <li><a href="?logout=1"><img src="../Style\Images\sign-out-alt.png" alt="Logout Icon" width="20px"> Logout</a></li>
=======
            <li><a href="YourAppointments(doctor).php"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Session_icon.svg" alt="Session Icon" width="20px"> Your Session</a></li>
            <li><a href="Logout.php"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Logout_icon.svg" alt="Logout Icon" width="20px"> Logout</a></li>
>>>>>>> Stashed changes
        </ul>
    </aside>
    <main class="main-content">
        <div class="header">
            <h1>Hello Dr. <?php echo isset($doctorName) ? $doctorName : ""; ?>,</h1>
            <nav>
                <a href="../home.php">Home</a>
                <a href="../Contact.php">Contact</a>
                <a href="../Aboutus.php">About Us</a>
            </nav>
        </div>
        <div class="profile-info">
            <h2>Personal Information</h2>
            <p><strong>Name:</strong> <?php echo isset($doctorName) ? $doctorName : ""; ?></p>
            <p><strong>Email:</strong> <?php echo isset($doctorEmail) ? $doctorEmail : ""; ?></p>
            <p><strong>Phone Number:</strong> <?php echo isset($phone) ? $phone : ""; ?></p>
            <p><strong>Medical License:</strong> <?php echo isset($license) ? $license : ""; ?></p>
            <p><strong>Certifications:</strong> <?php echo isset($certifications) ? $certifications : ""; ?></p>
            <p><strong>Specialization:</strong> <?php echo isset($specialization) ? $specialization : ""; ?></p>
        </div>
    </main>
</body>
</html>
