<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mental/phsycal"; // Corrected database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['date'], $_POST['price'], $_POST['session-type'], $_POST['location'], $_POST['duration'])) {
      
        $date = $_POST['date'];
        $price = $_POST['price'];
        $type = $_POST['session-type'];
        $location = $_POST['location'];
        $duration = $_POST['duration'];
        
       
        session_start();
        $doctor_id = $_SESSION['doctor_id']; 
        
        $sql = "INSERT INTO appointments (date, price, type, location, duration, doctor_id)
                VALUES ('$date', '$price', '$type', '$location', '$duration', '$doctor_id')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Appointment added successfully!";
            header("Location: {$_SERVER['PHP_SELF']}");
            exit();
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $errorMessage = "Please fill out all the required fields.";
    }
}

$conn->close();
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
input[type="date"],
input[type="number"],
select {
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
     
    .success-message {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-top: 10px;
        height: 40px;
        color: green;
    }

    .error-message {
        color: red;
    }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="LoggedDoctor" class="home-link">Home</a>
    </nav>

 
    <main class="content">
    <div class="form-container">
        <div class="form-header">Form for Add Appointment</div>
        <form action="#" method="POST">
            <!-- Date Field -->
            <label for="date">Date*</label>
            <input type="date" id="date" name="date" required>

      
<label for="session-type">Session Type*</label>
<select id="session-type" name="session-type" required>
    <option value="Offline">Offline</option>
    <option value="Online">Online</option>
</select>


            
            <label for="location">Location*</label>
            <input type="text" id="location" name="location" placeholder="Enter location" required>

          
            <label for="duration">Duration*</label>
            <input type="text" id="duration" name="duration" placeholder="Enter duration" required>

          
            <label for="price">Price*</label>
            <input type="number" id="price" name="price" placeholder="Enter price" required>

            <button type="submit" class="btn">Submit</button>
            <?php
            if (isset($successMessage)) {
                echo "<p class='success-message'>$successMessage</p>";
            } elseif (isset($errorMessage)) {
                echo "<p class='error-message'>$errorMessage</p>";
            }
            ?>
        </form>
    </div>
</main>



</body>
</html>
