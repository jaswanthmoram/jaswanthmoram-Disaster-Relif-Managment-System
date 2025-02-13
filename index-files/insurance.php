<?php
// Start the session to use session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Disaster Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="temp.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #dfefff; color: white;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" class="food-munch-logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <button><a class="nav-link active pl-2" id="navItem1" href="home.php">Home <span class="sr-only">(current)</span></a></button>
                    <button><a class="nav-link pl-2" href="disaster.php" id="navItem2">Disasters</a></button>
                    <button><a class="nav-link pl-2" href="report.php" id="navItem3">Report</a></button>
                    <button><a class="nav-link pl-2" href="victim.php" id="navItem4">Victims</a></button>
                    <button><a class="nav-link pl-2" href="victimhelp.php" id="navItem5">Help Victims</a></button>
                    <button><a class="nav-link pl-2" href="insurance.php" id="navItem5">Insurance Claim</a></button>
                    <button><a class="nav-link pl-2" href="awareness.php" id="navItem6">Awareness</a></button>

                    <!-- Conditional Login/Username Display -->
                    <?php if (isset($_SESSION['username'])): ?>
                        <button class="nav-link pl-2">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></button>
                        <button><a class="nav-link pl-2" href="logout.php" id="navItemLogout">Logout</a></button>
                    <?php else: ?>
                        <button><a class="nav-link pl-2" href="login.php" id="navItemLogin">Login</a></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="bg-primary text-white text-center py-5">
        <h2 class="text-center">File Insurance Claim</h2>
        <p class="text-center">Please provide the necessary details to file an insurance claim for your disaster-related losses.</p>
        </div>

        <!-- Form to submit insurance claims -->
        <form id="insuranceForm" action="submit-insurance-claim.php" method="POST">
            <div class="form-group">
                <label for="policyNumber">Insurance Policy Number</label>
                <input type="text" class="form-control" id="policyNumber" name="policyNumber" required placeholder="Enter your policy number">
            </div>

            <div class="form-group">
                <label for="lossType">Type of Loss</label>
                <select class="form-control" id="lossType" name="lossType" required>
                    <option value="">Select Loss Type</option>
                    <option value="property">Property Damage</option>
                    <option value="vehicle">Vehicle Damage</option>
                    <option value="medical">Medical Expenses</option>
                </select>
            </div>

            <div class="form-group">
                <label for="lossAmount">Estimated Amount of Loss (in INR)</label>
                <input type="number" class="form-control" id="lossAmount" name="lossAmount" required placeholder="Enter the estimated loss amount">
            </div>

            <div class="form-group">
                <label for="description">Loss Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Describe the nature of the loss"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit Insurance Claim</button>
        </form>

        <!-- Div to display the result -->
        <div id="resultMessage" class="mt-4"></div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Disaster Management System</p>
    </footer>

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- AJAX Script to handle form submission without page refresh -->
    <script>
        $(document).ready(function() {
    $('#insuranceForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
        
        // Serialize form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
            url: 'submit-insurance-claim.php',
            method: 'POST',
            data: formData,
            success: function(response) {
                // Display the response in the resultMessage div
                $('#resultMessage').html(response);
                
                // Clear the form after successful submission
                $('#insuranceForm')[0].reset();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Display error message
                $('#resultMessage').html('<div class="alert alert-danger">An error occurred while processing the claim: ' + textStatus + '</div>');
            }
        });
    });
});

    </script>
</body>

</html>