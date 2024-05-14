<?php
    // Start session
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mental/phsycal"; // Corrected database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Initialize consultants array
    $consultants = [];

    // SQL query to select all consultants
    $sql = 'SELECT d.name AS doctor_name, d.specialization AS specialization,
            DATE_FORMAT(a.date, "%Y-%m-%d") AS appointment_date, 
            DATE_FORMAT(a.date, "%H:%i") AS appointment_time,
            a.*
        FROM doctors d
        JOIN appointments a ON d.id = a.doctor_id
        WHERE a.status = "Available"';

    // Execute query
    $result = mysqli_query($conn, $sql);
    

    // Check if there are rows returned
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['NoAppointments'] = false;
        // Loop through each row and populate $consultants array
        while ($row = $result->fetch_assoc()) {
            $consultants[] = [
                'name' => $row['doctor_name'],
                'specialization' => $row['specialization'],
                'date' => $row['appointment_date'],
                'time' => $row['appointment_time'],
                'type' => $row['type'],
                'location' => $row['location'],
                'duration' => $row['duration'],
                'price' => $row['price'],
            ];
           
        }
    }
    else{
        $_SESSION['NoAppointments'] = true;
    }

    // Close database connection
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultants - Health</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Your existing CSS rules are included here */
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
    <?php
    $selection = isset($_GET['selection']) ? $_GET['selection'] : 'both'; // Default to 'both' if nothing is specified
    ?>
    <h1>Discover the Faces Behind Our <span class="highlight"><?php echo ucfirst($selection); ?></span> Health Consultants</h1>
    <div class="consultant-grid">
        <?php

        foreach ($consultants as $consultant) {
            // Display all if "both" is selected or match the type
            if ($selection === 'both' || $consultant['specialization'] === $selection) {
                echo '<div class="consultant-card">';
                echo '<div class="consultant-avatar"><img src="../Style\Images\profile.jpg'  . '"></div>';

                echo '<div class="consultant-name">' . "Dr. " .$consultant['name'] . '</div>';

                echo '<div class="consultant-info"><strong>Type:</strong> ' . $consultant['type'] . '</div>';
                echo '<div class="consultant-info"><strong>Date:</strong> ' . $consultant['date'] . '</div>';
                echo '<div class="consultant-info"><strong>Time:</strong> ' . $consultant['time'] . '</div>';
                echo '<div class="consultant-info"><strong>Duration:</strong> ' . $consultant['duration'] . '</div>';
                echo '<div class="consultant-info"><strong>Price:</strong> ' . $consultant['price'] . '</div>';
                
                if ($consultant['type'] === "Offline") {
                    echo '<div class="consultant-info"><strong>Address:</strong> ' . $consultant['location'] . '</div>';
                }
                echo '<a href="Payment" class="book-button">Book</a>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <?php 
        if(!$_SESSION['NoAppointments']){
            echo '<a href="#" class="view-all">View All</a>';
        }else{
            echo 'no appointments available';
        }
    ?>
</body>
</html>
