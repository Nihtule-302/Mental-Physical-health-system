<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration Form</title>
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
            <h1>WELCOME!</h1>
            <p>Create your Account</p>
        </div>
        <form>
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" placeholder="Ashika Jain">
            </div>
            <div class="form-group">
                <label for="phone-number">Phone No.</label>
                <input type="text" id="phone-number" name="phone-number" placeholder="Phone No.">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="AshikaJain45@gmail.com">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" id="gender" name="gender" placeholder="Male/Female">
            </div>
            <div class="password-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="password-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday" placeholder="Date">
            </div>
            <div class="form-group">
                <label for="treatment">Desired Treatment</label>
                <input type="text" id="treatment" name="treatment" placeholder="Mental/Physical">
            </div>
            <a href="../Patient/LoggedPatient.php"  class="submit-button">Sign Up</button></a>
        </form>
    </div>
</body>
</html>
