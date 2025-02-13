<?php

include 'connect.php';
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$helpType = $_POST['helpType'];
$donationAmount = isset($_POST['amount']) ? $_POST['amount'] : NULL;
$items = isset($_POST['items']) ? $_POST['items'] : [];

// Prepare SQL query to insert data into the database
$sql = "INSERT INTO help_requests (name, email, help_type, donation_amount, items) VALUES (?, ?, ?, ?, ?)";

// Convert array of items to comma-separated string for database storage
$itemsStr = !empty($items) ? implode(', ', $items) : NULL;

// Prepare the statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $helpType, $donationAmount, $itemsStr);

// Execute the query and check if the data is inserted
if ($stmt->execute()) {
    // Data inserted successfully, now display the acknowledgment message
    
    if ($helpType == 'donation') {
        // For donation
        echo "<div style='text-align: center; padding: 20px;'>";
        echo "<h2>Thank you, $name!</h2>";
        echo "<p>Your donation of INR " . number_format($donationAmount) . " has been successfully processed. We greatly appreciate your contribution to help disaster victims.</p>";
        echo "<p>A confirmation email has been sent to: $email.</p>";
        echo "</div>";
    } elseif ($helpType == 'physical') {
        // For physical help
        if (!empty($items)) {
            echo "<div style='text-align: center; padding: 20px;'>";
            echo "<h2>Thank you, $name!</h2>";
            echo "<p>We have received your offer to provide the following items to help disaster victims:</p>";
            echo "<ul>";
            foreach ($items as $item) {
                echo "<li>" . ucfirst($item) . "</li>";
            }
            echo "</ul>";
            echo "<p>A representative will contact you at $email to arrange the collection or delivery of these items.</p>";
            echo "</div>";
        } else {
            echo "<p>No items selected for physical help.</p>";
        }
    }
} else {
    // If there's an issue with inserting the data, show an error
    echo "<p>There was an issue processing your request. Please try again later.</p>";
}

// Close the database connection
$stmt->close();
$conn->close();
?>