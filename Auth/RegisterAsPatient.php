<?php
session_start(); // Start the session at the very beginning

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mental/phsycal"; // Corrected database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into 'users' and 'patients' tables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $treatment = $_POST['treatment'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $plan = $_POST['plan'];
    $insurance = $_POST['insurance'];
    $password = $_POST['password'];

    // Insert into 'users' table
    $sql = "INSERT INTO users (user_name, password, role) VALUES ('$email', '$password', 'Patient')";
    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id; // Get the last inserted user ID
        
        // Set the user's role in the session
        $_SESSION['role'] = 'Patient';
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $email; // Assuming email is the user's name for simplicity

        // Insert into 'patients' table
        $sql = "INSERT INTO patients (user_id, name, email, desired_treatment, gender, birthday, treatment_plan, insurance_info)
        VALUES ($user_id, '$name', '$email', '$treatment', '$gender', '$birthday', '$plan', '$insurance')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['message'] = "Registration successful!";
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Import Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

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

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #3a3a3a;
        }

        .form-group input,
        .form-group select {
            padding: 12px;
            border: 2px solid #b7c0db;
            border-radius: 10px;
            font-size: 14px;
            color: #6f7e8c;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
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
            <h1>Register as Patient</h1>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
                <label>Desired Treatment</label>
                <input type="text" name="treatment" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="date" name="birthday" required>
            </div>
            <div class="form-group">
                <label>Insurance Info</label>
                <input type="text" name="insurance">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="submit-button">Register</button>
        </form>
    </div>
</body>
</html>
