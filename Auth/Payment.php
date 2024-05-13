<?php
// Your PHP code here (if any)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
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
            background-color: #eff8fb;
        }

        .container {
            display: flex;
            max-width: 800px;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }

        .doctor-card {
            flex: 1;
            padding: 30px;
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
        }

        .doctor-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .doctor-avatar img {
            width: 100%;
            height: auto;
        }

        .doctor-info {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .doctor-info strong {
            font-weight: 600;
        }

        .payment-form {
            flex: 1;
            padding: 30px;
            background-color: #ffffff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #3a3a3a;
            display: block;
        }

        .form-group input {
            padding: 12px;
            border: 2px solid #b7c0db;
            border-radius: 10px;
            font-size: 14px;
            color: #6f7e8c;
            outline: none;
            transition: border-color 0.3s;
            width: 100%;
        }

        .form-group input:focus {
            border-color: #0093e9;
        }

        .remember-card {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .remember-card input {
            margin-right: 10px;
        }

        .submit-button {
            margin-top: 20px;
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
            display: inline-block;
        }

        .submit-button:hover {
            opacity: 0.9;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="doctor-card">
            <div class="doctor-avatar">
                <img src="https://undraw.co/api/illustrations/3bcb08e4-ff10-478e-b3c7-3f5e61a35296" alt="Dr. Ahmed Mahmoud">
            </div>
            <h2>Dr. Ahmed Mahmoud</h2>
            <div class="doctor-info"><strong>Type:</strong> online</div>
            <div class="doctor-info"><strong>Date:</strong> Friday 3-4</div>
            <div class="doctor-info">3:00 pm - 4:00 pm</div>
            <div class="doctor-info"><strong>Amount:</strong> 600 EGP</div>
        </div>
        <div class="payment-form">
        <form>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="gana09890@gmail.com">
    </div>
    <div class="form-group">
        <label for="card-info">Card information</label>
        <input type="text" id="card-info" name="card-info" placeholder="0000 0000 0000 0000" pattern="[0-9]{16}" required>
    </div>
    <div class="form-group" style="display: flex; gap: 10px;">
        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" required>
        <input type="text" id="cvc" name="cvc" placeholder="CVC" pattern="[0-9]{3}" required>
    </div>
    <div class="form-group">
        <label for="name-on-card">Name on card</label>
        <input type="text" id="name-on-card" name="name-on-card" placeholder="Name" required>
    </div>
    <div class="remember-card">
        <input type="checkbox" id="remember-card" name="remember-card">
        <label for="remember-card">Remember My Card</label>
    </div>
    <button type="submit" class="submit-button">Submit</button>
</form>

        </div>
    </div>
</body>
</html>
