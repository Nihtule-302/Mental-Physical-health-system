<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MindMates</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eff8fb;
            color: #4f4f4f;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

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

        main {
            flex: 1;
            padding: 40px;
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .contact-form h2 {
            font-size: 24px;
            color: #3a3a3a;
            margin-bottom: 20px;
        }

        .contact-form label {
            font-weight: 600;
            margin-bottom: 8px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #b7c0db;
        }

        .contact-form textarea {
            height: 150px;
            resize: none;
        }

        .contact-form button {
            padding: 12px 20px;
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form button:hover {
            opacity: 0.9;
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

        .footer {
    width: 100%;
    background-color: #ffffff;
    box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px 60px;
    display: flex;
    justify-content: space-between;
    align-items: start;
    font-size: 14px;
    color: #4f4f4f;
}

.footer-column {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-column h3 {
    font-size: 16px;
    color: #3a3a3a;
    margin-bottom: 10px;
    font-weight: 600;
}

.footer-column a {
    text-decoration: none;
    color: #4f4f4f;
    transition: color 0.3s;
}

.footer-column a:hover {
    color: #00b5c3;
}

.footer-bottom {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #b7c0db;
    font-size: 12px;
    color: #4f4f4f;
}

.social-icons {
    display: flex;
    gap: 10px;
}

.social-icons a {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-size: cover;
    border-radius: 50%;
}


    </style>
</head>
<body>
    <header>
        <div class="logo">MindMates</div>
        <nav>
            <a href="home.php">Home</a>
            <a href="Aboutus.php">About Us</a>
            <a href="Auth/PatientProfile.php" class="cta-button">Your Profile</a>
        </nav>
    </header>

    <main>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="#" method="post">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Type your message here"></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </main>
    <footer class="footer">
    <div class="footer-column">
        <div class="logo">Mind<span>Mates</span></div>
        <p>You've reached the end, but it's not the end!</p>
        <p>Remember, you're not alone. Reach out, seek support, and prioritize your mental well-being.</p>
    </div>
    <div class="footer-column">
        <h3>Services</h3>
        <a href="#">Psychotherapy</a>
        <a href="#">Mental Counseling</a>
        <a href="#">Support Groups</a>
        <a href="#">Case Management</a>
    </div>
    <div class="footer-column">
        <h3>Contact</h3>
        <p><img src="https://example.com/phone_icon.svg" alt="Phone"> +14 5464 8272</p>
        <p><img src="https://example.com/email_icon.svg" alt="Email"> rona@domain.com</p>
        <p><img src="https://example.com/location_icon.svg" alt="Location"> Lazzy Tower 192, Burn Swiss</p>
    </div>
    <div class="footer-column">
        <h3>Links</h3>
        <a href="#">Privacy Policy</a>
        <a href="#">Term Of Use</a>
    </div>
</footer>
<div class="footer-bottom">
    <p>copyright 2024 @mindmates all right reserved</p>
    <div class="social-icons">
        <a href="#" style="background-image: url('https://example.com/instagram_icon.png');"></a>
        <a href="#" style="background-image: url('https://example.com/facebook_icon.png');"></a>
        <a href="#" style="background-image: url('https://example.com/twitter_icon.png');"></a>
        <a href="#" style="background-image: url('https://example.com/linkedin_icon.png');"></a>
    </div>
</div>

</body>
</html>
