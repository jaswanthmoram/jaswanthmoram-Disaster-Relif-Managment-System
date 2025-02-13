<?php
// Start the session to use session variables
session_start();
require 'connect.php'; // Include the database connection file

// Handle form submission for victim requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $disasterType = $_POST['disasterType'];
    $location = $_POST['location'];
    $requirements = isset($_POST['requirement']) ? implode(", ", $_POST['requirement']) : '';

    // Insert the victim report into the database
    $sql = "INSERT INTO victim_requests (disaster_type, location, requirements) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $disasterType, $location, $requirements);

    if ($stmt->execute()) {
        echo "<script>alert('Your request has been submitted successfully and is under process.'); window.location.href='victim.php';</script>";
    } else {
        echo "<script>alert('Error submitting your request. Please try again.'); window.location.href='victim.php';</script>";
    }
}
?>
