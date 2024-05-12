<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MindMates</title>
    <style>
               * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       /* يمكنك إضافة أي تنسيق CSS إضافي هنا */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .about-heading {
            text-align: center;
            margin-bottom: 30px;
        }
        .about-heading h1 {
            color: #333;
            font-weight: bold;
        }
        .about-content {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .about-content img {
            max-width: 45%;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .about-text {
            flex: 1;
            padding: 0 20px;
            font-size: 16px; 
        }
        .bold-text {
            font-weight: bold;
            color: #56E0E0;
            font-size: 24px; 
            margin-top: 10px; 
        }
        .cta-button {
            padding: 10px 30px;
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            border: none;
            border-radius: 20px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .cta-button:hover {
            opacity: 0.9;
        }
        /* نمط التنسيق للنافبار */
        header {
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            text-decoration: none;
            color: #4f4f4f;
            font-weight: 600;
            margin-right: 20px;
        }

        header a:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">MindMates</div>
        <nav>
            <a href="#">Home</a>
            <a href="Contact.php">Contact</a>
            <a href="PatientProfile.php" class="cta-button">Your Profile</a>
        </nav>
    </header>

    <div class="container">
        <div class="about-heading">
            <h1>About Us</h1>
        </div>
        <div class="about-content">
            <img src="Images\img1.jpg" alt="Image 1">
            <div class="about-text">
                <p class="bold-text">Discover the Faces Behind<br>Our Mental Health<br>Consultancy.</p>
                <p>Meet our compassionate Mates at MindMates. With expertise in various fields, they're here to support you on your journey to mental wellness.</p>
            </div>
        </div>
    </div>

</body>
</html>
