<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for Add Appointment - MindMates</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
            justify-content: flex-start;
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

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 80px 100px;
            min-height: calc(100vh - 100px);
        }

        .form-container {
            max-width: 600px;
            width: 100%;
        }

        .form-header {
            font-size: 24px;
            font-weight: 600;
            color: #3a3a3a;
            margin-bottom: 40px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #3a3a3a;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="date"] {
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
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            display: inline-block;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .home-link {
            text-align: left;
            margin-bottom: 20px;
            font-size: 14px;
            color: #4f4f4f;
        }

        .home-link a {
            color: #4f4f4f;
            font-weight: 600;
            text-decoration: none;
        }

        .home-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="LoggedDoctor" class="home-link">Home</a>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <div class="form-container">
            <div class="form-header">Form for Add Appointment</div>
            <form action="#" method="POST">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="session-type">Session Type*</label>
                <input type="text" id="session-type" name="session-type" placeholder="Enter session type" required>

                <label for="phone-no">Phone No.*</label>
                <input type="text" id="phone-no" name="phone-no" placeholder="Enter your phone no." required>

                <label for="date">Date*</label>
                <input type="date" id="date" name="date" required>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>
