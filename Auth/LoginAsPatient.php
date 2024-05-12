<?php
    // Start session
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mental/phsycal"; // Corrected database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Perform database query to check if the user exists and password is correct
        // You should replace this with your actual database query
        // Example:
        $query = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);

        // Assuming you have a database connection already established
        // Replace $connection with your actual database connection variable

        // If the query returns a row, the user exists and password is correct
        // Example:
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $patient_id = $row['patient_id'];

            $_SESSION['patient_id'] = $patient_id;

            //     // Redirect to logged in page
            header("Location: PatientHome.php");
            exit();
        } else {
            header("Location: #");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Mental Health</title>
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
            background-color: #eff8fb;
            color: #4f4f4f;
        }

        .login-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
        }

        h1 {
            font-size: 32px;
            font-weight: 600;
            color: #3a3a3a;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            color: #828282;
            margin-bottom: 30px;
        }

        .signup-link {
            color: #00b5c3;
            font-weight: 600;
            text-decoration: none;
        }

        .signup-link:hover {
            text-decoration: underline;
        }

        .illustration {
            margin-bottom: 40px;
        }

        .illustration img {
            max-width: 60%;
            height: auto;
        }

        .form-container {
            background-color: #ffffff;
            border: 2px solid #e3e4f3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 40px 30px;
            max-width: 400px;
            width: 100%;
            text-align: left;
        }

        label {
            display: block;
            font-weight: 600;
            color: #3a3a3a;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #e3e4f3;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .btn {
            padding: 12px 40px;
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            text-align: center;
            display: inline-block;
            width: 100%;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .forgot-password {
            text-align: right;
            margin-top: -15px;
            margin-bottom: 20px;
            font-size: 12px;
            color: #828282;
        }

        .forgot-password a {
            color: #00b5c3;
            font-weight: 600;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main class="login-page">
        <h1>Login</h1>
        <p>Don't have an account? <a href="Register.php" class="signup-link">Sign up</a></p>
        <div class="illustration">
            <img src="Images\login.png" alt="Login Illustration">
        </div>
        <div class="form-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </main>
</body>
</html>
