<?php
// Start the session to use session variables
session_start();
require 'connect.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $skills = $_POST['skills'];
    $availability = $_POST['availability'];

    // Insert the volunteer details into the database
    $sql = "INSERT INTO volunteers (name, email, phone, skills, availability) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $name, $email, $phone, $skills, $availability);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Thank you for your interest.'); window.location.href = 'volunteer.php';</script>";
    } else {
        echo "<script>alert('Error registering volunteer. Please try again.'); window.location.href = 'volunteer.php';</script>";
    }
}
?>
