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

// Redirect to another page after successful connection
header("Location: ../home.php"); // Replace 'page.php' with the desired page
exit(); // Make sure the script stops after the redirection

?>