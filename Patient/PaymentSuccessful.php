<?php
// Your PHP code here (if any)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Successfully Booked</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #0093E9, #80D0C7);
        }

        .container {
            max-width: 500px;
            width: 100%;
            padding: 60px 40px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            text-align: center;
        }

        .success-icon {
            font-size: 80px;
            color: #00b5c3;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #3a3a3a;
        }

        h2 {
            font-size: 36px;
            font-weight: 600;
            color: #00b5c3;
            margin-bottom: 20px;
        }

        p {
            font-size: 14px;
            color: #4f4f4f;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .home-link {
            text-decoration: none;
            font-size: 16px;
            color: #4f4f4f;
            font-weight: 500;
            position: absolute;
            top: 30px;
            right: 30px;
        }

        .home-link:hover {
            color: #ffffff;
        }

    </style>
</head>
<body>
    <a href="#" class="home-link">Home</a>
    <div class="container">
        <div class="success-icon">&#10004;</div>
        <h1>Your session</h1>
        <h2>successfully Booked!</h2>
        <p>We're thrilled to be a part of your journey. Get ready to embark on a fulfilling experience tailored just for you. We can't wait to see you soon!</p>
    </div>
</body>
</html>
