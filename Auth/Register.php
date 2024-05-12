<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page - Doctor or Patient</title>
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

        .welcome-page {
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

        .button-group {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
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
        }

        .btn:hover {
            opacity: 0.8;
        }

        .doctor {
            background: linear-gradient(to right, #0093E9, #80D0C7);
        }

        .patient {
            background: linear-gradient(to right, #80D0C7, #0093E9);
        }
    </style>
</head>
<body>
    <main class="welcome-page">
        <h1>WELCOME!</h1>
        <p>Don't have an account, <a href="#" class="signup-link">Sign up</a></p>
        <div class="illustration">
            <img src="https://undraw.co/api/illustrations/30cc6354-c6e7-4f85-b16f-7f66aa5b71e6" alt="Sign up Illustration">
        </div>
        <div class="button-group">
            <a href="registerAsDoctor.php" class="btn doctor">Register as Doctor</a>
            <a href="registerAsPatient.php" class="btn patient">Register as Patient</a>
        </div>
    </main>
</body>
</html>
