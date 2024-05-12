<?php
// Your PHP code here (if any)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultants - Mental Health</title>
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
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 40px 20px;
        }

        h1 {
            font-size: 36px;
            font-weight: 600;
            line-height: 1.3;
            text-align: center;
            margin-bottom: 40px;
        }

        .highlight {
            color: #00b5c3;
        }

        .consultant-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1200px;
            margin-bottom: 30px;
        }

        .consultant-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #e3e4f3;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .consultant-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .consultant-avatar img {
            width: 100%;
            height: auto;
        }

        .consultant-name {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 15px;
            color: #3a3a3a;
        }

        .consultant-info {
            font-size: 14px;
            color: #4f4f4f;
            margin-bottom: 10px;
        }

        .consultant-info strong {
            font-weight: 600;
            color: #3a3a3a;
        }

        .book-button {
            padding: 10px 30px;
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
            margin-top: auto;
        }

        .book-button:hover {
            opacity: 0.9;
        }

        .view-all {
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
            display: inline-block;
        }

        .view-all:hover {
            opacity: 0.9;
        }

    </style>
</head>
<body>
    <h1>Discover the Faces Behind Our <span class="highlight">Mental Health</span> Consultants</h1>
    <div class="consultant-grid">
        <div class="consultant-card">
            <div class="consultant-avatar">
                <img src="https://undraw.co/api/illustrations/9d17b81d-d76c-4721-83a9-c31cfe123af1" alt="Dr. Nada Mostafa">
            </div>
            <div class="consultant-name">Dr. Nada Mostafa</div>
            <div class="consultant-info"><strong>Type:</strong> Online</div>
            <div class="consultant-info"><strong>Date:</strong> Friday 3-4</div>
            <div class="consultant-info">3:00 pm - 4:00 pm<br>5:00 pm - 6:00 pm</div>
            <a href="#" class="book-button">Book</a>
        </div>
        <div class="consultant-card">
            <div class="consultant-avatar">
                <img src="https://undraw.co/api/illustrations/31e03e74-2e27-44e3-a5e1-319e7bfc7c4c" alt="Dr. Peter Elia">
            </div>
            <div class="consultant-name">Dr. Peter Elia</div>
            <div class="consultant-info"><strong>Type:</strong> Offline</div>
            <div class="consultant-info"><strong>Date:</strong> Friday 3-4</div>
            <div class="consultant-info">3:00 pm - 4:00 pm<br>5:00 pm - 6:00 pm</div>
            <div class="consultant-info"><strong>Address:</strong> Any City, XYZ MP</div>
            <a href="#" class="book-button">Book</a>
        </div>
        <div class="consultant-card">
            <div class="consultant-avatar">
                <img src="https://undraw.co/api/illustrations/3bcb08e4-ff10-478e-b3c7-3f5e61a35296" alt="Dr. Saif Allah Mostafa">
            </div>
            <div class="consultant-name">Dr. Saif Allah Mostafa</div>
            <div class="consultant-info"><strong>Type:</strong> Online</div>
            <div class="consultant-info"><strong>Date:</strong> Friday 3-4</div>
            <div class="consultant-info">3:00 pm - 4:00 pm<br>5:00 pm - 6:00 pm</div>
            <a href="#" class="book-button">Book</a>
        </div>
        <div class="consultant-card">
            <div class="consultant-avatar">
                <img src="https://undraw.co/api/illustrations/9d17b81d-d76c-4721-83a9-c31cfe123af1" alt="Dr. Gana Yasser">
            </div>
            <div class="consultant-name">Dr. Gana Yasser</div>
            <div class="consultant-info"><strong>Type:</strong> Offline</div>
            <div class="consultant-info"><strong>Date:</strong> Friday 3-4</div>
            <div class="consultant-info">3:00 pm - 4:00 pm<br>5:00 pm - 6:00 pm</div>
            <div class="consultant-info"><strong>Address:</strong> Any City, XYZ MP</div>
            <a href="#" class="book-button">Book</a>
        </div>
        <div class="consultant-card">
            <div class="consultant-avatar">
                <img src="https://undraw.co/api/illustrations/31e03e74-2e27-44e3-a5e1-319e7bfc7c4c" alt="Dr. Ali Wafa">
            </div>
            <div class="consultant-name">Dr. Ali Wafa</div>
            <div class="consultant-info"><strong>Type:</strong> Online</div>
            <div class="consultant-info"><strong>Date:</strong> Friday 3-4</div>
            <div class="consultant-info">3:00 pm - 4:00 pm<br>5:00 pm - 6:00 pm</div>
            <a href="#" class="book-button">Book</a>
        </div>
        <div class="consultant-card">
            <div class="consultant-avatar">
                <img src="https://undraw.co/api/illustrations/3bcb08e4-ff10-478e-b3c7-3f5e61a35296" alt="Dr. Ahmed Mahmoud">
            </div>
            <div class="consultant-name">Dr. Ahmed Mahmoud</div>
            <div class="consultant-info"><strong>Type:</strong> Offline</div>
            <div class="consultant-info"><strong>Date:</strong> Friday 3-4</div>
            <div class="consultant-info">3:00 pm - 4:00 pm<br>5:00 pm - 6:00 pm</div>
            <div class="consultant-info"><strong>Address:</strong> Any City, XYZ MP</div>
            <a href="#" class="book-button">Book</a>
        </div>
    </div>
    <a href="#" class="view-all">View All</a>
</body>
</html>
