<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindMates - Your Appointments</title>
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
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        .logo {
            font-size: 24px;
            font-weight: 600;
            color: #1c1c1c;
        }

        .logo span {
            color: #00b5c3;
        }

        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #00b5c3;
        }

        .profile-pic img {
            width: 100%;
            height: auto;
        }

        .profile-name {
            font-weight: 600;
            font-size: 18px;
            color: #3a3a3a;
        }

        .sidebar-nav {
            width: 100%;
            list-style: none;
            margin-top: 20px;
        }

        .sidebar-nav li {
            margin-bottom: 20px;
        }

        .sidebar-nav a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: #4f4f4f;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-nav a:hover {
            color: #00b5c3;
        }

        .main-content {
            flex: 1;
            padding: 40px 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header a {
            text-decoration: none;
            font-size: 16px;
            color: #4f4f4f;
            font-weight: 500;
            margin-left: 30px;
        }

        .header a:hover {
            color: #1c1c1c;
        }

        .patient-list {
            background-color: #ffffff;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            border: 1px solid #b7c0db;
        }

        .patient-list h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            color: #3a3a3a;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 12px;
            border: 1px solid #b7c0db;
            text-align: left;
            font-size: 14px;
        }

        .table th {
            background-color: #f5f8fa;
            font-weight: 600;
            color: #4f4f4f;
        }

        .edit-button {
            padding: 8px 12px;
            background: linear-gradient(to right, #0093E9, #80D0C7);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            margin: 0;
        }

        .edit-button:hover {
            opacity: 0.9;
        }

    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="logo">Mind<span>Mates</span></div>
        <div class="profile-pic">
            <img src="https://undraw.co/api/illustrations/9d17b81d-d76c-4721-83a9-c31cfe123af1" alt="Doctor Profile Picture">
        </div>
        <div class="profile-name">Dr. Peter</div>
        <ul class="sidebar-nav">
            <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/1/14/Home_icon.svg" alt="Home Icon" width="20px"> Profile</a></li>
            <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/1/1d/Appointment_icon.svg" alt="Appointment Icon" width="20px"> Your Appointments</a></li>
            <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Logout_icon.svg" alt="Logout Icon" width="20px"> Logout</a></li>
        </ul>
    </aside>
    <main class="main-content">
        <div class="header">
            <h1>Hello Dr. Peter,</h1>
            <nav>
                <a href="#">Home</a>
                <a href="#">Contact</a>
                <a href="#">About Us</a>
            </nav>
        </div>
        <div class="patient-list">
            <h2>Patient List</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Appointment Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane Doe</td>
                        <td>29</td>
                        <td>New York</td>
                        <td>2024-06-15</td>
                        <td><a href="#" class="edit-button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>John Smith</td>
                        <td>34</td>
                        <td>Los Angeles</td>
                        <td>2024-06-20</td>
                        <td><a href="#" class="edit-button">Edit</a></td>
                    </tr>
                    <tr>
                        <td>Emily Johnson</td>
                        <td>27</td>
                        <td>Chicago</td>
                        <td>2024-07-01</td>
                        <td><a href="#" class="edit-button">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
