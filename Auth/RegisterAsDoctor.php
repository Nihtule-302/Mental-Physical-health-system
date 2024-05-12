<?php
session_start(); // Start the session at the beginning

// Initialize variables
$name = $email = $phone = $license = $certifications = $specialization = $password = "";
$error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone']);
    $specialization = sanitizeInput($_POST['specialization']);
    $passwordd = sanitizeInput($_POST['password']);

    // Validate files and move them to the upload folder
    $licenseTarget = handleFileUpload('license');
    $certificationsTarget = handleFileUpload('certifications');

    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mental/phsycal";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into 'users' table
    $sqlUser = "INSERT INTO users (user_name, password, role) VALUES ('$email', '$passwordd', 'Doctor')";
    if ($conn->query($sqlUser) === TRUE) {
        $user_id = $conn->insert_id; // Get the last inserted user ID

        // Insert into 'doctors' table
        $sqlDoctor = "INSERT INTO doctors (user_id, name, email, phone_number, medical_license, certifications, specialization)
        VALUES ($user_id, '$name', '$email', '$phone', '$licenseTarget', '$certificationsTarget', '$specialization')";

        if ($conn->query($sqlDoctor) === TRUE) {
            // Start the session after successful registration
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $email; // Assuming email is the user's name for simplicity
            $_SESSION['role'] = 'Doctor'; // Set the role to Doctor

            // Redirect to home.php after successful registration
            $_SESSION['message'] = "Registration successful!";
            header("Location: home.php");
            exit();
        } else {
            $error = "Error inserting into doctors table: " . $conn->error;
        }
    } else {
        $error = "Error inserting into users table: " . $conn->error;
    }

    $conn->close();
}

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to handle file upload
function handleFileUpload($inputName) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES[$inputName]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file size (limit to 5MB)
    if ($_FILES[$inputName]["size"] > 5 * 1024 * 1024) {
        $error = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
        $error = "Sorry, only PDF, DOC, and DOCX files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $error = "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $targetFile)) {
            return $targetFile;
        } else {
            $error = "Sorry, there was an error uploading your file.";
        }
    }
    return "";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration Form</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 900px;
            width: 100%;
            padding: 40px 30px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #3a3a3a;
        }

        .header p {
            font-size: 16px;
            color: #828282;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .form-group {
            flex: 1 1 calc(50% - 15px);
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #3a3a3a;
        }

        .form-group input {
            padding: 12px;
            border: 2px solid #b7c0db;
            border-radius: 10px;
            font-size: 14px;
            color: #6f7e8c;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #0093e9;
        }

        .password-group {
            flex: 1 1 calc(50% - 15px);
            display: flex;
            flex-direction: column;
        }

        .password-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #3a3a3a;
        }

        .password-group input {
            padding: 12px;
            border: 2px solid #b7c0db;
            border-radius: 10px;
            font-size: 14px;
            color: #6f7e8c;
            outline: none;
            transition: border-color 0.3s;
        }

        .password-group input:focus {
            border-color: #0093e9;
        }

        .submit-button {
            margin-top: 30px;
            padding: 15px 0;
            width: 180px;
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

        .submit-button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Register as Doctor</h1>
        </div>
        <form action="RegisterAsDoctor.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" name="phone" required>
            </div>
            <div class="form-group">
                <label for="license">Medical License</label>
                <input type="file" name="license" id="license" accept=".pdf,.doc,.docx" required>
            </div>
            <div class="form-group">
                <label for="certifications">Certifications</label>
                <input type="file" name="certifications" id="certifications" accept=".pdf,.doc,.docx" required>
            </div>
            <div class="form-group">
                <label>Specialization</label>
                <select name="specialization" required>
                    <option value="Mental">Mental</option>
                    <option value="Physical">Physical</option>
                </select>
            </div>
            <div class="password-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="submit-button">Register</button>
        </form>
    </div>
</body>
</html>