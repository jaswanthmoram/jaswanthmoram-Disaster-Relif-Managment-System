<?php
  include 'connect.php';
// Get form data
$policyNumber = $_POST['policyNumber'];
$lossType = $_POST['lossType'];
$lossAmount = $_POST['lossAmount'];
$description = $_POST['description'];

// Validate policy number and fetch policy details from the database
$sql = "SELECT policy_holder_name, policy_limit, type_of_loss FROM insurance_policies WHERE policy_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $policyNumber);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $policy = $result->fetch_assoc();

    // Check if the loss type matches and the loss amount is within the policy limit
    if ($policy['type_of_loss'] == $lossType && $lossAmount <= $policy['policy_limit']) {
        // Valid claim
        echo "<div class='alert alert-success'><h2>Insurance Claim Initiated</h2>";
        echo "<p>Policy Holder: " . $policy['policy_holder_name'] . "</p>";
        echo "<p>Claim Amount: INR " . number_format($lossAmount) . "</p>";
        echo "<p>Description: $description</p></div>";
    } else {
        // Invalid claim
        echo "<div class='alert alert-danger'><h2>Insurance Claim Denied</h2>";
        if ($policy['type_of_loss'] != $lossType) {
            echo "<p>The type of loss does not match your insurance policy.</p>";
        }
        if ($lossAmount > $policy['policy_limit']) {
            echo "<p>The loss amount exceeds the policy limit of INR " . number_format($policy['policy_limit']) . ".</p>";
        }
        echo "</div>";
    }
} else {
    // Invalid policy number
    echo "<div class='alert alert-warning'><h2>Invalid Policy Number</h2>";
    echo "<p>Please check your insurance policy number and try again.</p></div>";
}

// Close the connection
$conn->close();
?>